/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/icons/questions.js":
/*!********************************!*\
  !*** ./src/icons/questions.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const QuestionsIcon = () => {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    width: "24",
    height: "24",
    viewBox: "0 0 24 24",
    fill: "none",
    xmlns: "http://www.w3.org/2000/svg",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("g", {
      clipPath: "url(#clip0_4_71)",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z",
        fill: "#F0F0F1"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M7 6.3383C7.40327 5.22525 8.19923 4.28668 9.24692 3.68883C10.2946 3.09099 11.5264 2.87245 12.7241 3.07193C13.9219 3.2714 15.0083 3.87601 15.7909 4.77868C16.5735 5.68135 17.0018 6.82381 17 8.00373C17 11.3346 11.8542 13 11.8542 13",
        fill: "#F0F0F1"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M7 6.3383C7.40327 5.22525 8.19923 4.28668 9.24692 3.68883C10.2946 3.09099 11.5264 2.87245 12.7241 3.07193C13.9219 3.2714 15.0083 3.87601 15.7909 4.77868C16.5735 5.68135 17.0018 6.82381 17 8.00373C17 11.3346 11.8542 13 11.8542 13",
        stroke: "#FF0000",
        strokeWidth: "2",
        strokeLinecap: "round",
        strokeLinejoin: "round"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
        cx: "12",
        cy: "18",
        r: "2",
        fill: "black"
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("defs", {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("clipPath", {
        id: "clip0_4_71",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
          d: "M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z",
          fill: "white"
        })
      })
    })]
  });
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (QuestionsIcon);

/***/ }),

/***/ "./src/questions-block/block.json":
/*!****************************************!*\
  !*** ./src/questions-block/block.json ***!
  \****************************************/
/***/ ((module) => {

module.exports = /*#__PURE__*/JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":3,"name":"create-block/questions-block","version":"0.1.0","title":"Questions Block","category":"widgets","description":"Animated questions section with GSAP pinning and transitions.","example":{},"supports":{"html":false},"textdomain":"questions-block","icon":"<svg\\r\\n\\t\\t\\twidth=\\"24\\"\\r\\n\\t\\t\\theight=\\"24\\"\\r\\n\\t\\t\\tviewBox=\\"0 0 24 24\\"\\r\\n\\t\\t\\tfill=\\"none\\"\\r\\n\\t\\t\\txmlns=\\"http://www.w3.org/2000/svg\\"\\r\\n\\t\\t>\\r\\n\\t\\t\\t<g clipPath=\\"url(#clip0_4_71)\\">\\r\\n\\t\\t\\t\\t<path\\r\\n\\t\\t\\t\\t\\td=\\"M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z\\"\\r\\n\\t\\t\\t\\t\\tfill=\\"#F0F0F1\\"\\r\\n\\t\\t\\t\\t/>\\r\\n\\t\\t\\t\\t<path\\r\\n\\t\\t\\t\\t\\td=\\"M7 6.3383C7.40327 5.22525 8.19923 4.28668 9.24692 3.68883C10.2946 3.09099 11.5264 2.87245 12.7241 3.07193C13.9219 3.2714 15.0083 3.87601 15.7909 4.77868C16.5735 5.68135 17.0018 6.82381 17 8.00373C17 11.3346 11.8542 13 11.8542 13\\"\\r\\n\\t\\t\\t\\t\\tfill=\\"#F0F0F1\\"\\r\\n\\t\\t\\t\\t/>\\r\\n\\t\\t\\t\\t<path\\r\\n\\t\\t\\t\\t\\td=\\"M7 6.3383C7.40327 5.22525 8.19923 4.28668 9.24692 3.68883C10.2946 3.09099 11.5264 2.87245 12.7241 3.07193C13.9219 3.2714 15.0083 3.87601 15.7909 4.77868C16.5735 5.68135 17.0018 6.82381 17 8.00373C17 11.3346 11.8542 13 11.8542 13\\"\\r\\n\\t\\t\\t\\t\\tstroke=\\"#FF0000\\"\\r\\n\\t\\t\\t\\t\\tstrokeWidth=\\"2\\"\\r\\n\\t\\t\\t\\t\\tstrokeLinecap=\\"round\\"\\r\\n\\t\\t\\t\\t\\tstrokeLinejoin=\\"round\\"\\r\\n\\t\\t\\t\\t/>\\r\\n\\t\\t\\t\\t<circle cx=\\"12\\" cy=\\"18\\" r=\\"2\\" fill=\\"black\\" />\\r\\n\\t\\t\\t</g>\\r\\n\\t\\t\\t<defs>\\r\\n\\t\\t\\t\\t<clipPath id=\\"clip0_4_71\\">\\r\\n\\t\\t\\t\\t\\t<path\\r\\n\\t\\t\\t\\t\\t\\td=\\"M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z\\"\\r\\n\\t\\t\\t\\t\\t\\tfill=\\"white\\"\\r\\n\\t\\t\\t\\t\\t/>\\r\\n\\t\\t\\t\\t</clipPath>\\r\\n\\t\\t\\t</defs>\\r\\n\\t\\t</svg>","editorScript":"file:./index.js","editorStyle":"file:./index.css","style":"file:./style-index.css","viewScript":"file:./view.js","attributes":{"question1Title":{"type":"string","default":"Who?"},"question1Content":{"type":"string","default":"Who is Adaire Digital? Adaire Digital is your white-label web developer. Need a site? No problem."},"question2Title":{"type":"string","default":"You?"},"question2Content":{"type":"string","default":"Are you an agency keen to expand your team without hiring; Are you a company who needs to bring additional web talent into your team; Are you an individual looking to have your own team to start or elevate your online presence, we would love to work with you! Companies: Ensure your site or eCommerce site is always up to date and ready for visitors. Individuals: If you need an online presence, we can help"},"question3Title":{"type":"string","default":"What?"},"question3Content":{"type":"string","default":"What do we do? We are web experts doing all things digital web."},"backgroundColor":{"type":"string","default":"#070707"},"textColor":{"type":"string","default":"#ffffff"},"titleColor":{"type":"string","default":"#ffffff"},"inactiveTitleColor":{"type":"string","default":"#666666"},"activeSection":{"type":"string","default":"what"},"blockId":{"type":"string","default":""},"scrollDistance":{"type":"number","default":250},"scrollDistanceMobile":{"type":"number","default":170},"showProgressIndicator":{"type":"boolean","default":true},"progressIndicatorColor":{"type":"string","default":"#ffffff"},"progressIndicatorActiveColor":{"type":"string","default":"#ff0000"},"progressIndicatorFillColor":{"type":"string","default":"#ff0000"},"progressIndicatorWidth":{"type":"number","default":3}}}');

/***/ }),

/***/ "./src/questions-block/edit.js":
/*!*************************************!*\
  !*** ./src/questions-block/edit.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Edit)
/* harmony export */ });
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



const SECTION_OPTIONS = [{
  label: 'Question 1',
  value: 'what'
}, {
  label: 'Question 2',
  value: 'why'
}, {
  label: 'Question 3',
  value: 'who'
}];
function Edit({
  attributes,
  setAttributes
}) {
  const {
    question1Title,
    question1Content,
    question2Title,
    question2Content,
    question3Title,
    question3Content,
    backgroundColor,
    textColor,
    titleColor,
    inactiveTitleColor,
    activeSection = 'what',
    blockId,
    scrollDistance = 250,
    scrollDistanceMobile = 170,
    showProgressIndicator = true,
    progressIndicatorColor = '#ffffff',
    progressIndicatorActiveColor = '#ff0000',
    progressIndicatorFillColor = '#ff0000',
    progressIndicatorWidth = 3
  } = attributes;

  // Function to convert selected text to list format
  const convertSelectedToList = (content, start, end) => {
    if (!content || start === end) return content;
    const beforeSelection = content.substring(0, start);
    const selectedText = content.substring(start, end);
    const afterSelection = content.substring(end);

    // Convert selected text to list format
    const lines = selectedText.split('\n').filter(line => line.trim());
    const listText = lines.map(line => `• ${line.trim()}`).join('\n');
    return beforeSelection + listText + afterSelection;
  };

  // Function to handle text selection and conversion
  const handleConvertSelectionToList = targetSection => {
    // Find all textareas and check which one has a selection
    const textareas = document.querySelectorAll('textarea');
    let selectedTextarea = null;
    let selectionStart = 0;
    let selectionEnd = 0;
    for (const textarea of textareas) {
      if (textarea.selectionStart !== textarea.selectionEnd) {
        selectedTextarea = textarea;
        selectionStart = textarea.selectionStart;
        selectionEnd = textarea.selectionEnd;
        break;
      }
    }
    if (!selectedTextarea) {
      alert('Please select some text in any content area first.');
      return;
    }
    const currentContent = selectedTextarea.value;
    const newContent = convertSelectedToList(currentContent, selectionStart, selectionEnd);

    // Update the appropriate content attribute based on the textarea's placeholder
    const placeholder = selectedTextarea.placeholder || '';
    if (placeholder.includes('Enter What content')) {
      setAttributes({
        question1Content: newContent
      });
    } else if (placeholder.includes('Enter Why content')) {
      setAttributes({
        question2Content: newContent
      });
    } else if (placeholder.includes('Enter Who content')) {
      setAttributes({
        question3Content: newContent
      });
    }
  };
  const blockProps = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.useBlockProps)({
    style: {
      backgroundColor: backgroundColor || '#25232c',
      "--title-color": titleColor || "#ffffff",
      "--inactive-title-color": inactiveTitleColor || "#666666",
      "--progress-indicator-color": progressIndicatorColor,
      "--progress-indicator-fill-color": progressIndicatorFillColor,
      "--progress-indicator-width": `${progressIndicatorWidth}px`,
      "--scroll-distance": `${scrollDistance}%`,
      "--scroll-distance-mobile": `${scrollDistanceMobile}%`
    },
    id: blockId || undefined,
    "data-scroll-distance": scrollDistance,
    "data-scroll-distance-mobile": scrollDistanceMobile
  });
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.InspectorControls, {
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.PanelBody, {
        title: "Background Color",
        initialOpen: true,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.ColorPicker, {
          color: backgroundColor,
          onChangeComplete: color => setAttributes({
            backgroundColor: color.hex
          }),
          disableAlpha: true
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.PanelBody, {
        title: "Text Colors",
        initialOpen: false,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.ColorPicker, {
          color: textColor,
          onChangeComplete: color => setAttributes({
            textColor: color.hex
          }),
          disableAlpha: true
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.PanelBody, {
        title: "Title Colors",
        initialOpen: false,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          style: {
            marginBottom: '16px'
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("label", {
            style: {
              display: 'block',
              marginBottom: '8px',
              fontWeight: '600'
            },
            children: "Active Title Color"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.ColorPicker, {
            color: titleColor,
            onChangeComplete: color => setAttributes({
              titleColor: color.hex
            }),
            disableAlpha: true
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("label", {
            style: {
              display: 'block',
              marginBottom: '8px',
              fontWeight: '600'
            },
            children: "Inactive Title Color"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.ColorPicker, {
            color: inactiveTitleColor,
            onChangeComplete: color => setAttributes({
              inactiveTitleColor: color.hex
            }),
            disableAlpha: true
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.PanelBody, {
        title: "Active Section for Editing",
        initialOpen: true,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.SelectControl, {
          label: "Active Section",
          value: activeSection,
          options: SECTION_OPTIONS,
          onChange: value => setAttributes({
            activeSection: value
          })
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.PanelBody, {
        title: "Content Editing",
        initialOpen: true,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextareaControl, {
          label: "Question 1 Title",
          value: question1Title,
          onChange: value => setAttributes({
            question1Title: value
          }),
          placeholder: "What."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextareaControl, {
          label: "Question 1 Content",
          value: question1Content,
          onChange: value => setAttributes({
            question1Content: value
          }),
          placeholder: "Enter What content..."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.Button, {
          isSecondary: true,
          onClick: () => handleConvertSelectionToList(),
          style: {
            marginTop: '8px'
          },
          children: "Convert Selection to List"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextareaControl, {
          label: "Question 2 Title",
          value: question2Title,
          onChange: value => setAttributes({
            question2Title: value
          }),
          placeholder: "You?"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextareaControl, {
          label: "Question 2 Content",
          value: question2Content,
          onChange: value => setAttributes({
            question2Content: value
          }),
          placeholder: "Enter Why content..."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.Button, {
          isSecondary: true,
          onClick: () => handleConvertSelectionToList(),
          style: {
            marginTop: '8px'
          },
          children: "Convert Selection to List"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextareaControl, {
          label: "Question 3 Title",
          value: question3Title,
          onChange: value => setAttributes({
            question3Title: value
          }),
          placeholder: "Who."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextareaControl, {
          label: "Question 3 Content",
          value: question3Content,
          onChange: value => setAttributes({
            question3Content: value
          }),
          placeholder: "Enter Who content..."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.Button, {
          isSecondary: true,
          onClick: () => handleConvertSelectionToList(),
          style: {
            marginTop: '8px'
          },
          children: "Convert Selection to List"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.PanelBody, {
        title: "Scroll Settings",
        initialOpen: false,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.RangeControl, {
          label: "Scroll Distance (Desktop)",
          value: scrollDistance,
          onChange: value => setAttributes({
            scrollDistance: value
          }),
          min: 100,
          max: 500,
          step: 10,
          help: "How much scroll is needed to reach the next question on desktop"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.RangeControl, {
          label: "Scroll Distance (Mobile)",
          value: scrollDistanceMobile,
          onChange: value => setAttributes({
            scrollDistanceMobile: value
          }),
          min: 100,
          max: 300,
          step: 10,
          help: "How much scroll is needed to reach the next question on mobile"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.PanelBody, {
        title: "Progress Indicator",
        initialOpen: false,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.ToggleControl, {
          label: "Show Progress Indicator",
          checked: showProgressIndicator,
          onChange: value => setAttributes({
            showProgressIndicator: value
          }),
          help: "Display a vertical progress line next to the questions"
        }), showProgressIndicator && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.Fragment, {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
            style: {
              marginBottom: '16px'
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("label", {
              style: {
                display: 'block',
                marginBottom: '8px',
                fontWeight: '600'
              },
              children: "Progress Line Color"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.ColorPicker, {
              color: progressIndicatorColor,
              onChangeComplete: color => setAttributes({
                progressIndicatorColor: color.hex
              })
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
            style: {
              marginBottom: '16px'
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("label", {
              style: {
                display: 'block',
                marginBottom: '8px',
                fontWeight: '600'
              },
              children: "Progress Fill Color"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.ColorPicker, {
              color: progressIndicatorFillColor,
              onChangeComplete: color => setAttributes({
                progressIndicatorFillColor: color.hex
              })
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.RangeControl, {
            label: "Progress Line Width",
            value: progressIndicatorWidth,
            onChange: value => setAttributes({
              progressIndicatorWidth: value
            }),
            min: 1,
            max: 10,
            step: 1,
            help: "Width of the progress indicator line in pixels"
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.PanelBody, {
        title: "Block Settings",
        initialOpen: false,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextControl, {
          label: "Block ID",
          value: blockId,
          onChange: value => setAttributes({
            blockId: value
          }),
          help: "Add a custom ID to this block for CSS targeting or anchor links."
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("section", {
      ...blockProps,
      className: "animated-section",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        className: "section-container",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          style: {
            display: "flex",
            flexDirection: "row"
          },
          children: [showProgressIndicator && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
            className: "progress-indicator",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
              className: "progress-line",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
                className: "progress-fill"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
            className: "titles-column",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
              className: `title-item${activeSection === 'what' ? ' active' : ''}`,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "section-number",
                children: "01"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText, {
                tagName: "h2",
                value: question1Title,
                onChange: value => setAttributes({
                  question1Title: value
                }),
                placeholder: "What.",
                style: {
                  color: activeSection === 'what' ? titleColor : inactiveTitleColor,
                  opacity: activeSection === 'what' ? 1 : 0.5,
                  fontSize: activeSection === 'what' ? '5rem' : '3rem',
                  transition: 'all 0.3s',
                  whiteSpace: 'nowrap',
                  overflow: 'hidden',
                  textOverflow: 'ellipsis'
                }
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
              className: `title-item${activeSection === 'why' ? ' active' : ''}`,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "section-number",
                children: "02"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText, {
                tagName: "h2",
                value: question2Title,
                onChange: value => setAttributes({
                  question2Title: value
                }),
                placeholder: "You?",
                style: {
                  color: activeSection === 'why' ? titleColor : inactiveTitleColor,
                  opacity: activeSection === 'why' ? 1 : 0.5,
                  fontSize: activeSection === 'why' ? '5rem' : '3rem',
                  transition: 'all 0.3s',
                  whiteSpace: 'nowrap',
                  overflow: 'hidden',
                  textOverflow: 'ellipsis'
                }
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
              className: `title-item${activeSection === 'who' ? ' active' : ''}`,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "section-number",
                children: "03"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText, {
                tagName: "h2",
                value: question3Title,
                onChange: value => setAttributes({
                  question3Title: value
                }),
                placeholder: "Who.",
                style: {
                  color: activeSection === 'who' ? titleColor : inactiveTitleColor,
                  opacity: activeSection === 'who' ? 1 : 0.5,
                  fontSize: activeSection === 'who' ? '5rem' : '3rem',
                  transition: 'all 0.3s',
                  whiteSpace: 'nowrap',
                  overflow: 'hidden',
                  textOverflow: 'ellipsis'
                }
              })]
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          className: "content-column",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
            className: `content-item${activeSection === 'what' ? ' active' : ''}`,
            "data-section": "what",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText, {
              tagName: "div",
              value: question1Content,
              onChange: value => setAttributes({
                question1Content: value
              }),
              placeholder: "Enter What content...",
              style: {
                color: textColor || undefined
              }
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
            className: `content-item${activeSection === 'why' ? ' active' : ''}`,
            "data-section": "why",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText, {
              tagName: "div",
              value: question2Content,
              onChange: value => setAttributes({
                question2Content: value
              }),
              placeholder: "Enter Why content...",
              style: {
                color: textColor || undefined
              }
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
            className: `content-item${activeSection === 'who' ? ' active' : ''}`,
            "data-section": "who",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText, {
              tagName: "div",
              value: question3Content,
              onChange: value => setAttributes({
                question3Content: value
              }),
              placeholder: "Enter Who content...",
              style: {
                color: textColor || undefined
              }
            })
          })]
        })]
      })
    })]
  });
}

/***/ }),

/***/ "./src/questions-block/index.js":
/*!**************************************!*\
  !*** ./src/questions-block/index.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./style.scss */ "./src/questions-block/style.scss");
/* harmony import */ var _edit__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./edit */ "./src/questions-block/edit.js");
/* harmony import */ var _save__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./save */ "./src/questions-block/save.js");
/* harmony import */ var _block_json__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./block.json */ "./src/questions-block/block.json");
/* harmony import */ var _icons_questions__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../icons/questions */ "./src/icons/questions.js");
/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */


/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` keyword are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */


/**
 * Internal dependencies
 */




// Import icon directly


/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockType)(_block_json__WEBPACK_IMPORTED_MODULE_4__.name, {
  /**
   * @see ./edit.js
   */
  edit: _edit__WEBPACK_IMPORTED_MODULE_2__["default"],
  /**
   * @see ./save.js
   */
  save: _save__WEBPACK_IMPORTED_MODULE_3__["default"],
  icon: _icons_questions__WEBPACK_IMPORTED_MODULE_5__["default"]
});

/***/ }),

/***/ "./src/questions-block/save.js":
/*!*************************************!*\
  !*** ./src/questions-block/save.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ save)
/* harmony export */ });
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function save({
  attributes
}) {
  const {
    question1Title,
    question1Content,
    question2Title,
    question2Content,
    question3Title,
    question3Content,
    backgroundColor,
    textColor,
    titleColor,
    inactiveTitleColor,
    blockId,
    showProgressIndicator = true,
    progressIndicatorColor = "#ffffff",
    progressIndicatorActiveColor = "#ff0000",
    progressIndicatorFillColor = "#ff0000",
    progressIndicatorWidth = 3,
    scrollDistance = 250,
    scrollDistanceMobile = 170
  } = attributes;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("section", {
    ..._wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.useBlockProps.save({
      style: {
        backgroundColor: backgroundColor || "#25232c",
        "--title-color": titleColor || "#ffffff",
        "--inactive-title-color": inactiveTitleColor || "#666666",
        "--progress-indicator-color": progressIndicatorColor,
        "--progress-indicator-active-color": progressIndicatorActiveColor,
        "--progress-indicator-fill-color": progressIndicatorFillColor,
        "--progress-indicator-width": `${progressIndicatorWidth}px`,
        "--scroll-distance": `${scrollDistance}%`,
        "--scroll-distance-mobile": `${scrollDistanceMobile}%`
      },
      id: blockId || undefined,
      "data-scroll-distance": scrollDistance,
      "data-scroll-distance-mobile": scrollDistanceMobile,
      "data-show-progress": showProgressIndicator
    }),
    className: "animated-section",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "section-container",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          display: "flex",
          flexDirection: "row"
        },
        children: [showProgressIndicator && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "progress-indicator",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "progress-line",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "progress-fill"
            })
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "titles-column",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "title-item",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "section-number",
              children: "01"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText.Content, {
              tagName: "h2",
              value: question1Title
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "title-item",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "section-number",
              children: "02"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText.Content, {
              tagName: "h2",
              value: question2Title
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "title-item",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "section-number",
              children: "03"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText.Content, {
              tagName: "h2",
              value: question3Title
            })]
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "content-column",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "content-item",
          "data-section": "what",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText.Content, {
            tagName: "div",
            value: question1Content,
            style: {
              color: textColor || undefined
            }
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "content-item",
          "data-section": "why",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText.Content, {
            tagName: "div",
            value: question2Content,
            style: {
              color: textColor || undefined
            }
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "content-item",
          "data-section": "who",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText.Content, {
            tagName: "div",
            value: question3Content,
            style: {
              color: textColor || undefined
            }
          })
        })]
      })]
    })
  });
}

/***/ }),

/***/ "./src/questions-block/style.scss":
/*!****************************************!*\
  !*** ./src/questions-block/style.scss ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ ((module) => {

module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

module.exports = window["wp"]["components"];

/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "React" ***!
  \************************/
/***/ ((module) => {

module.exports = window["React"];

/***/ }),

/***/ "react/jsx-runtime":
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
/***/ ((module) => {

module.exports = window["ReactJSXRuntime"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"questions-block/index": 0,
/******/ 			"questions-block/style-index": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = globalThis["webpackChunkadaire_blocks"] = globalThis["webpackChunkadaire_blocks"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["questions-block/style-index"], () => (__webpack_require__("./src/questions-block/index.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=index.js.map