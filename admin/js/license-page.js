/**
 * License Management JavaScript for Adaire Blocks
 *
 * @package AdaireBlocks
 */

(function($) {
    'use strict';

    class AdaireLicenseManager {
        constructor() {
            this.init();
        }

        init() {
            this.bindEvents();
        }

        bindEvents() {
            // License form submission
            $(document).on('submit', '#adaire-license-form', this.handleLicenseActivation.bind(this));
            
            // Activate license button
            $(document).on('click', '#activate-license', this.handleLicenseActivation.bind(this));
            
            // Deactivate license button
            $(document).on('click', '#deactivate-license', this.handleLicenseDeactivation.bind(this));
            
            // Validate license button
            $(document).on('click', '#validate-license', this.handleLicenseValidation.bind(this));
            
            // Test API button (debug mode only)
            $(document).on('click', '#test-api', this.handleTestApi.bind(this));
            
            // Test Auth button (debug mode only)
            $(document).on('click', '#test-auth', this.handleTestAuth.bind(this));
            $(document).on('click', '#refresh-status', this.handleRefreshStatus.bind(this));
        }

        handleLicenseActivation(e) {
            e.preventDefault();
            
            const licenseKey = $('#license-key').val().trim();
            
            if (!licenseKey) {
                this.showMessage('error', adaireLicense.strings.licenseKeyRequired);
                return;
            }

            this.activateLicense(licenseKey);
        }

        handleLicenseDeactivation(e) {
            e.preventDefault();
            
            if (!confirm(adaireLicense.strings.confirmDeactivate)) {
                return;
            }

            this.deactivateLicense();
        }

        handleLicenseValidation(e) {
            e.preventDefault();
            this.validateLicense();
        }

        handleTestApi(e) {
            e.preventDefault();
            this.testApi();
        }

        handleTestAuth(e) {
            e.preventDefault();
            this.testAuth();
        }

        handleRefreshStatus(e) {
            e.preventDefault();
            this.refreshStatus();
        }

        activateLicense(licenseKey) {
            const $button = $('#activate-license');
            const $container = $('.adaire-license-container');
            
            console.log('Adaire Blocks License: Starting license activation process');
            console.log('Adaire Blocks License: EXACT Key:', licenseKey);
            
            this.setLoading($button, adaireLicense.strings.activating);
            $container.addClass('adaire-license-loading');
            
            // First, validate the license to get the correct activation limits
            this.validateLicenseForActivation(licenseKey)
                .then(validationData => {
                    console.log('Adaire Blocks License: Validation successful, proceeding with activation');
                    console.log('Adaire Blocks License: License limits:', {
                        timesActivated: validationData.timesActivated,
                        timesActivatedMax: validationData.timesActivatedMax,
                        remainingActivations: validationData.remainingActivations
                    });
                    
                    // Now proceed with activation
                    return this.performActivation(licenseKey, validationData);
                })
                .then(activationData => {
                    console.log('Adaire Blocks License: Activation successful');
                    this.showMessage('success', 'License activated successfully!');
                    // Save the activation result to WordPress database
                    this.saveActivationResult(licenseKey, activationData);
                })
                .catch(error => {
                    console.error('Adaire Blocks License: Activation process failed:', error);
                    this.showMessage('error', error.message || 'License activation failed');
                })
                .finally(() => {
                    console.log('Adaire Blocks License: Activation process completed');
                    this.removeLoading($button, adaireLicense.strings.activate);
                    $container.removeClass('adaire-license-loading');
                });
        }

        validateLicenseForActivation(licenseKey) {
            return new Promise((resolve, reject) => {
                console.log('Adaire Blocks License: Validating license before activation');
                
                const consumerKey = 'ck_5a9271d84ab660911a7c48dfd3f89e1691d9e286';
                const consumerSecret = 'cs_d92b496a59e64042539c7e6eb14f17697d347827';
                const baseUrl = 'https://adaire.dev/ad/wp-json/lmfwc/v2/licenses/validate/';
                const fullUrl = `${baseUrl}${licenseKey}?consumer_key=${encodeURIComponent(consumerKey)}&consumer_secret=${encodeURIComponent(consumerSecret)}`;
                
                console.log('Adaire Blocks License: Validation URL:', fullUrl);
                
                fetch(fullUrl, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    console.log('Adaire Blocks License: Validation response status:', response.status);
                    return response.text().then(text => {
                        console.log('Adaire Blocks License: Validation response body:', text);
                        
                        try {
                            const jsonData = JSON.parse(text);
                            console.log('Adaire Blocks License: Validation response (parsed):', jsonData);
                            
                            if (response.ok && jsonData.success) {
                                if (jsonData.data && jsonData.data.errors) {
                                    const errorMessages = [];
                                    Object.keys(jsonData.data.errors).forEach(key => {
                                        if (Array.isArray(jsonData.data.errors[key])) {
                                            errorMessages.push(...jsonData.data.errors[key]);
                                        } else {
                                            errorMessages.push(jsonData.data.errors[key]);
                                        }
                                    });
                                    reject(new Error(errorMessages.join('; ') || 'License validation failed'));
                                } else {
                                    resolve(jsonData.data);
                                }
                            } else {
                                reject(new Error(jsonData.message || 'License validation failed'));
                            }
                        } catch (e) {
                            reject(new Error('Invalid validation response from server'));
                        }
                    });
                })
                .catch(error => {
                    reject(new Error('Network error during validation: ' + error.message));
                });
            });
        }

        performActivation(licenseKey, validationData) {
            return new Promise((resolve, reject) => {
                console.log('Adaire Blocks License: Performing license activation');
                
                const consumerKey = 'ck_5a9271d84ab660911a7c48dfd3f89e1691d9e286';
                const consumerSecret = 'cs_d92b496a59e64042539c7e6eb14f17697d347827';
                const baseUrl = 'https://adaire.dev/ad/wp-json/lmfwc/v2/licenses/activate/';
                const fullUrl = `${baseUrl}${licenseKey}?consumer_key=${encodeURIComponent(consumerKey)}&consumer_secret=${encodeURIComponent(consumerSecret)}`;
                
                console.log('Adaire Blocks License: Activation URL:', fullUrl);
                
                fetch(fullUrl, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    console.log('Adaire Blocks License: Activation response status:', response.status);
                    return response.text().then(text => {
                        console.log('Adaire Blocks License: Activation response body:', text);
                        
                        try {
                            const jsonData = JSON.parse(text);
                            console.log('Adaire Blocks License: Activation response (parsed):', jsonData);
                            
                            if (response.ok && jsonData.success) {
                                if (jsonData.data && jsonData.data.errors) {
                                    const errorMessages = [];
                                    Object.keys(jsonData.data.errors).forEach(key => {
                                        if (Array.isArray(jsonData.data.errors[key])) {
                                            errorMessages.push(...jsonData.data.errors[key]);
                                        } else {
                                            errorMessages.push(jsonData.data.errors[key]);
                                        }
                                    });
                                    reject(new Error(errorMessages.join('; ') || 'License activation failed'));
                                } else if (jsonData.data && (jsonData.data.token || jsonData.data.activationData?.token)) {
                                    // Merge validation data with activation data
                                    const combinedData = {
                                        ...jsonData,
                                        data: {
                                            ...jsonData.data,
                                            timesActivated: validationData.timesActivated,
                                            timesActivatedMax: validationData.timesActivatedMax,
                                            remainingActivations: validationData.remainingActivations
                                        }
                                    };
                                    resolve(combinedData);
                                } else {
                                    reject(new Error('License activation failed - no token received'));
                                }
                            } else {
                                reject(new Error(jsonData.message || 'License activation failed'));
                            }
                        } catch (e) {
                            reject(new Error('Invalid activation response from server'));
                        }
                    });
                })
                .catch(error => {
                    reject(new Error('Network error during activation: ' + error.message));
                });
            });
        }

        deactivateLicense() {
            const $button = $('#deactivate-license');
            const $container = $('.adaire-license-container');
            
            // Get the activation token from the saved license data
            const licenseKey = this.getSavedLicenseKey();
            const activationToken = this.getActivationToken();
            
            if (!licenseKey) {
                this.showMessage('error', 'No license key found. Please activate the license first.');
                return;
            }
            
            console.log('Adaire Blocks License: Starting license deactivation');
            console.log('Adaire Blocks License: License key:', licenseKey);
            console.log('Adaire Blocks License: Activation token:', activationToken || 'No token found - will deactivate without token');
            
            // Use EXACT key as user input - no cleaning
            const consumerKey = 'ck_5a9271d84ab660911a7c48dfd3f89e1691d9e286';
            const consumerSecret = 'cs_d92b496a59e64042539c7e6eb14f17697d347827';
            const baseUrl = 'https://adaire.dev/ad/wp-json/lmfwc/v2/licenses/deactivate/';
            
            // Build URL with or without token parameter
            let fullUrl;
            if (activationToken) {
                fullUrl = `${baseUrl}${licenseKey}?consumer_key=${encodeURIComponent(consumerKey)}&consumer_secret=${encodeURIComponent(consumerSecret)}&token=${encodeURIComponent(activationToken)}`;
                console.log('Adaire Blocks License: Deactivation URL (with token):', fullUrl);
            } else {
                fullUrl = `${baseUrl}${licenseKey}?consumer_key=${encodeURIComponent(consumerKey)}&consumer_secret=${encodeURIComponent(consumerSecret)}`;
                console.log('Adaire Blocks License: Deactivation URL (without token):', fullUrl);
            }
            
            this.setLoading($button, adaireLicense.strings.deactivating);
            $container.addClass('adaire-license-loading');
            
            // GET request with fetch for deactivation
            fetch(fullUrl, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                console.log('Adaire Blocks License: Deactivation response status:', response.status);
                return response.text().then(text => {
                    console.log('Adaire Blocks License: Deactivation response body:', text);
                    
                    try {
                        const jsonData = JSON.parse(text);
                        console.log('Adaire Blocks License: Deactivation response (parsed):', jsonData);
                        
                        if (response.ok && jsonData.success) {
                            // Check if there are errors in the data
                            if (jsonData.data && jsonData.data.errors) {
                                console.log('Adaire Blocks License: Deactivation failed with errors:', jsonData.data.errors);
                                const errorMessages = [];
                                Object.keys(jsonData.data.errors).forEach(key => {
                                    if (Array.isArray(jsonData.data.errors[key])) {
                                        errorMessages.push(...jsonData.data.errors[key]);
                                    } else {
                                        errorMessages.push(jsonData.data.errors[key]);
                                    }
                                });
                                this.showMessage('error', errorMessages.join('; ') || 'License deactivation failed');
                            } else {
                                // Successful deactivation
                                console.log('Adaire Blocks License: Deactivation successful');
                                const message = activationToken ? 
                                    'License deactivated successfully!' : 
                                    'License deactivated successfully (without token)!';
                                this.showMessage('success', message);
                                // Save the deactivation result to WordPress database
                                this.saveDeactivationResult();
                            }
                        } else {
                            console.log('Adaire Blocks License: Deactivation failed - response not ok or success false');
                            this.showMessage('error', jsonData.message || 'License deactivation failed');
                        }
                    } catch (e) {
                        console.log('Adaire Blocks License: Response is not JSON:', text);
                        this.showMessage('error', 'Invalid response from server');
                    }
                });
            })
            .catch(error => {
                console.error('Adaire Blocks License: Deactivation fetch error:', error);
                this.showMessage('error', 'Network error: ' + error.message);
            })
            .finally(() => {
                console.log('Adaire Blocks License: Deactivation request completed');
                this.removeLoading($button, adaireLicense.strings.deactivate);
                $container.removeClass('adaire-license-loading');
            });
        }

        validateLicense() {
            const $button = $('#validate-license');
            const $container = $('.adaire-license-container');
            
            // Get the license key from saved data or input
            const licenseKey = this.getSavedLicenseKey();
            
            if (!licenseKey) {
                this.showMessage('error', 'No license key found. Please activate a license first.');
                return;
            }
            
            console.log('Adaire Blocks License: Starting license validation');
            console.log('Adaire Blocks License: License key:', licenseKey);
            
            // Use EXACT key as user input - no cleaning
            const consumerKey = 'ck_5a9271d84ab660911a7c48dfd3f89e1691d9e286';
            const consumerSecret = 'cs_d92b496a59e64042539c7e6eb14f17697d347827';
            const baseUrl = 'https://adaire.dev/ad/wp-json/lmfwc/v2/licenses/validate/';
            const fullUrl = `${baseUrl}${licenseKey}?consumer_key=${encodeURIComponent(consumerKey)}&consumer_secret=${encodeURIComponent(consumerSecret)}`;
            
            console.log('Adaire Blocks License: Validation URL:', fullUrl);
            
            this.setLoading($button, adaireLicense.strings.validating);
            $container.addClass('adaire-license-loading');
            
            // GET request with fetch for validation
            fetch(fullUrl, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                console.log('Adaire Blocks License: Validation response status:', response.status);
                return response.text().then(text => {
                    console.log('Adaire Blocks License: Validation response body:', text);
                    
                    try {
                        const jsonData = JSON.parse(text);
                        console.log('Adaire Blocks License: Validation response (parsed):', jsonData);
                        
                        if (response.ok && jsonData.success) {
                            // Check if there are errors in the data
                            if (jsonData.data && jsonData.data.errors) {
                                console.log('Adaire Blocks License: Validation failed with errors:', jsonData.data.errors);
                                const errorMessages = [];
                                Object.keys(jsonData.data.errors).forEach(key => {
                                    if (Array.isArray(jsonData.data.errors[key])) {
                                        errorMessages.push(...jsonData.data.errors[key]);
                                    } else {
                                        errorMessages.push(jsonData.data.errors[key]);
                                    }
                                });
                                this.showMessage('error', errorMessages.join('; ') || 'License validation failed');
                            } else {
                                // Successful validation
                                console.log('Adaire Blocks License: Validation successful');
                                this.showMessage('success', 'License validation successful!');
                                // Update license data with validation results
                                this.updateLicenseData(jsonData.data);
                            }
                        } else {
                            console.log('Adaire Blocks License: Validation failed - response not ok or success false');
                            this.showMessage('error', jsonData.message || 'License validation failed');
                        }
                    } catch (e) {
                        console.log('Adaire Blocks License: Response is not JSON:', text);
                        this.showMessage('error', 'Invalid response from server');
                    }
                });
            })
            .catch(error => {
                console.error('Adaire Blocks License: Validation fetch error:', error);
                this.showMessage('error', 'Network error: ' + error.message);
            })
            .finally(() => {
                console.log('Adaire Blocks License: Validation request completed');
                this.removeLoading($button, adaireLicense.strings.validate);
                $container.removeClass('adaire-license-loading');
            });
        }

        testApi() {
            const licenseKey = $('#license-key').val().trim();
            
            if (!licenseKey) {
                this.showMessage('error', 'Please enter a license key to test the API');
                return;
            }
            
            console.log('Adaire Blocks License: Testing API with key:', licenseKey);
            
            // Use EXACT key as user input - no cleaning
            const consumerKey = 'ck_5a9271d84ab660911a7c48dfd3f89e1691d9e286';
            const consumerSecret = 'cs_d92b496a59e64042539c7e6eb14f17697d347827';
            const baseUrl = 'https://adaire.dev/ad/wp-json/lmfwc/v2/licenses/activate/';
            const url = `${baseUrl}${licenseKey}?consumer_key=${encodeURIComponent(consumerKey)}&consumer_secret=${encodeURIComponent(consumerSecret)}`;
            
            console.log('Adaire Blocks License: API Test');
            console.log('=== API TEST ===');
            console.log('- EXACT Key:', licenseKey);
            console.log('- Full URL:', url);
            
            // Simple GET request with fetch
            fetch(url, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                console.log('Adaire Blocks License: API Test Response Status:', response.status);
                console.log('Adaire Blocks License: API Test Response Headers:', response.headers);
                
                return response.text().then(text => {
                    console.log('Adaire Blocks License: API Test Response Body (raw):', text);
                    
                    try {
                        const jsonData = JSON.parse(text);
                        console.log('Adaire Blocks License: API Test Response Body (parsed):', jsonData);
                        
                        if (response.ok && jsonData.success) {
                            // Check if there are errors in the data
                            if (jsonData.data && jsonData.data.errors) {
                                console.log('Adaire Blocks License: API test found errors:', jsonData.data.errors);
                                const errorMessages = [];
                                Object.keys(jsonData.data.errors).forEach(key => {
                                    if (Array.isArray(jsonData.data.errors[key])) {
                                        errorMessages.push(...jsonData.data.errors[key]);
                                    } else {
                                        errorMessages.push(jsonData.data.errors[key]);
                                    }
                                });
                                this.showMessage('error', `API test found errors: ${errorMessages.join('; ')}`);
                            } else {
                                this.showMessage('success', 'API test successful! Check console for details.');
                            }
                        } else {
                            this.showMessage('error', `API test failed with status ${response.status}. Check console for details.`);
                        }
                    } catch (e) {
                        console.log('Adaire Blocks License: Response is not JSON:', text);
                        this.showMessage('error', 'Response is not valid JSON. Check console for details.');
                    }
                });
            })
            .catch(error => {
                console.error('Adaire Blocks License: API Test Error:', error);
                this.showMessage('error', 'API test failed: ' + error.message);
            });
        }

        testAuth() {
            const licenseKey = $('#license-key').val().trim();
            
            if (!licenseKey) {
                this.showMessage('error', 'Please enter a license key to test authentication');
                return;
            }
            
            console.log('Adaire Blocks License: Testing authentication with key:', licenseKey);
            
            // Use EXACT key as user input - no cleaning
            const consumerKey = 'ck_5a9271d84ab660911a7c48dfd3f89e1691d9e286';
            const consumerSecret = 'cs_d92b496a59e64042539c7e6eb14f17697d347827';
            const baseUrl = 'https://adaire.dev/ad/wp-json/lmfwc/v2/licenses/activate/';
            const url = `${baseUrl}${licenseKey}?consumer_key=${encodeURIComponent(consumerKey)}&consumer_secret=${encodeURIComponent(consumerSecret)}`;
            
            console.log('Adaire Blocks License: Auth Test');
            console.log('=== AUTH TEST ===');
            console.log('- EXACT Key:', licenseKey);
            console.log('- Full URL:', url);
            
            // Simple GET request with fetch
            fetch(url, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                console.log('Adaire Blocks License: Auth Test Response Status:', response.status);
                console.log('Adaire Blocks License: Auth Test Response Headers:', response.headers);
                
                return response.text().then(text => {
                    console.log('Adaire Blocks License: Auth Test Response Body (raw):', text);
                    
                    try {
                        const jsonData = JSON.parse(text);
                        console.log('Adaire Blocks License: Auth Test Response Body (parsed):', jsonData);
                        
                        if (response.ok && jsonData.success) {
                            // Check if there are errors in the data
                            if (jsonData.data && jsonData.data.errors) {
                                console.log('Adaire Blocks License: Auth test found errors:', jsonData.data.errors);
                                const errorMessages = [];
                                Object.keys(jsonData.data.errors).forEach(key => {
                                    if (Array.isArray(jsonData.data.errors[key])) {
                                        errorMessages.push(...jsonData.data.errors[key]);
                                    } else {
                                        errorMessages.push(jsonData.data.errors[key]);
                                    }
                                });
                                this.showMessage('error', `Auth test found errors: ${errorMessages.join('; ')}`);
                            } else {
                                this.showMessage('success', 'Auth test successful! Check console for details.');
                            }
                        } else {
                            this.showMessage('error', `Auth test failed with status ${response.status}. Check console for details.`);
                        }
                    } catch (e) {
                        console.log('Adaire Blocks License: Response is not JSON:', text);
                        this.showMessage('error', 'Response is not valid JSON. Check console for details.');
                    }
                });
            })
            .catch(error => {
                console.error('Adaire Blocks License: Auth Test Error:', error);
                this.showMessage('error', 'Auth test failed: ' + error.message);
            });
        }

        refreshStatus() {
            console.log('Adaire Blocks License: Refreshing license status...');
            window.location.reload();
        }

        getSavedLicenseKey() {
            // Try to get license key from the page data or localStorage
            const licenseKeyElement = document.querySelector('input[name="license_key"]');
            if (licenseKeyElement && licenseKeyElement.value && licenseKeyElement.value.trim()) {
                return licenseKeyElement.value.trim();
            }
            
            // Try localStorage as fallback
            const savedKey = localStorage.getItem('adaire_license_key');
            if (savedKey && savedKey.trim()) {
                return savedKey.trim();
            }
            
            // Try to get from page data attributes
            const pageData = document.querySelector('[data-license-key]');
            if (pageData) {
                const key = pageData.getAttribute('data-license-key');
                if (key && key.trim()) {
                    return key.trim();
                }
            }
            
            return null;
        }

        getActivationToken() {
            // Try to get activation token from localStorage or page data
            const savedToken = localStorage.getItem('adaire_activation_token');
            if (savedToken) {
                return savedToken;
            }
            
            // Try to get from page data if available
            const tokenElement = document.querySelector('[data-activation-token]');
            if (tokenElement) {
                return tokenElement.getAttribute('data-activation-token');
            }
            
            return null;
        }

        saveDeactivationResult() {
            console.log('Adaire Blocks License: Saving deactivation result to database');
            
            // Clear the activation token from localStorage
            localStorage.removeItem('adaire_activation_token');
            localStorage.removeItem('adaire_license_key');
            
            // Send deactivation result to WordPress
            $.ajax({
                url: adaireLicense.ajaxUrl,
                type: 'POST',
                data: {
                    action: 'adaire_save_deactivation',
                    nonce: adaireLicense.nonce
                },
                success: (response) => {
                    console.log('Adaire Blocks License: Deactivation save response:', response);
                    
                    if (response.success) {
                        console.log('Adaire Blocks License: Deactivation saved to database successfully');
                        // Reload page after 2 seconds to show updated status
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        console.log('Adaire Blocks License: Failed to save deactivation to database:', response.data);
                        this.showMessage('error', 'License deactivated but failed to save status. Please refresh the page manually.');
                    }
                },
                error: (xhr, status, error) => {
                    console.error('Adaire Blocks License: Deactivation save error:', {
                        xhr: xhr,
                        status: status,
                        error: error,
                        responseText: xhr.responseText
                    });
                    this.showMessage('error', 'License deactivated but failed to save status. Please refresh the page manually.');
                }
            });
        }

        updateLicenseData(validationData) {
            console.log('Adaire Blocks License: Updating license data with validation results');
            
            // Send validation results to WordPress to update database
            $.ajax({
                url: adaireLicense.ajaxUrl,
                type: 'POST',
                data: {
                    action: 'adaire_update_license_data',
                    validation_data: validationData,
                    nonce: adaireLicense.nonce
                },
                success: (response) => {
                    console.log('Adaire Blocks License: License data update response:', response);
                    
                    if (response.success) {
                        console.log('Adaire Blocks License: License data updated successfully');
                        // Reload page after 2 seconds to show updated status
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        console.log('Adaire Blocks License: Failed to update license data:', response.data);
                        this.showMessage('error', 'License validated but failed to update status. Please refresh the page manually.');
                    }
                },
                error: (xhr, status, error) => {
                    console.error('Adaire Blocks License: License data update error:', {
                        xhr: xhr,
                        status: status,
                        error: error,
                        responseText: xhr.responseText
                    });
                    this.showMessage('error', 'License validated but failed to update status. Please refresh the page manually.');
                }
            });
        }

        saveActivationResult(licenseKey, activationData) {
            console.log('Adaire Blocks License: Saving activation result to database');
            console.log('Adaire Blocks License: License key:', licenseKey);
            console.log('Adaire Blocks License: Activation data:', activationData);
            
            // Save license key and token to localStorage for future use
            localStorage.setItem('adaire_license_key', licenseKey);
            const token = activationData.data?.token || activationData.data?.activationData?.token;
            if (token) {
                localStorage.setItem('adaire_activation_token', token);
                console.log('Adaire Blocks License: Saved token to localStorage:', token);
            }
            
            // Send the activation result to WordPress to save in database
            $.ajax({
                url: adaireLicense.ajaxUrl,
                type: 'POST',
                data: {
                    action: 'adaire_save_activation',
                    license_key: licenseKey,
                    activation_data: activationData, // Send as object, not stringified
                    nonce: adaireLicense.nonce
                },
                success: (response) => {
                    console.log('Adaire Blocks License: Database save response:', response);
                    
                    if (response.success) {
                        console.log('Adaire Blocks License: Activation saved to database successfully');
                        console.log('Adaire Blocks License: Reloading page in 2 seconds...');
                        // Reload page after 2 seconds to show updated status
                        setTimeout(() => {
                            console.log('Adaire Blocks License: Reloading page now...');
                            window.location.reload();
                        }, 2000);
                    } else {
                        console.log('Adaire Blocks License: Failed to save activation to database:', response.data);
                        this.showMessage('error', 'License activated but failed to save status. Please refresh the page manually.');
                    }
                },
                error: (xhr, status, error) => {
                    console.error('Adaire Blocks License: Database save error:', {
                        xhr: xhr,
                        status: status,
                        error: error,
                        responseText: xhr.responseText
                    });
                    this.showMessage('error', 'License activated but failed to save status. Please refresh the page manually.');
                }
            });
        }

        setLoading($button, text) {
            $button.prop('disabled', true);
            $button.data('original-text', $button.html());
            $button.html(`<span class="dashicons dashicons-update"></span> ${text}`);
        }

        removeLoading($button, originalText) {
            $button.prop('disabled', false);
            $button.html($button.data('original-text') || originalText);
        }

        showMessage(type, message) {
            const $messagesContainer = $('#adaire-license-messages');
            const iconClass = type === 'success' ? 'dashicons-yes-alt' : 'dashicons-warning';
            
            const $message = $(`
                <div class="adaire-license-message-item ${type}">
                    <span class="dashicons ${iconClass}"></span>
                    <span>${message}</span>
                </div>
            `);
            
            $messagesContainer.append($message);
            
            // Auto-remove success messages after 5 seconds
            if (type === 'success') {
                setTimeout(() => {
                    $message.fadeOut(300, function() {
                        $(this).remove();
                    });
                }, 5000);
            }
            
            // Scroll to message
            $('html, body').animate({
                scrollTop: $message.offset().top - 100
            }, 500);
        }

        clearMessages() {
            $('#adaire-license-messages').empty();
        }
    }

    // Initialize when document is ready
    $(document).ready(function() {
        new AdaireLicenseManager();
    });

})(jQuery);
