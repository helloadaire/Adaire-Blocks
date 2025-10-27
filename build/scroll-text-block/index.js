/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/icons/scroll-text.js":
/*!**********************************!*\
  !*** ./src/icons/scroll-text.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const ScrollTextIcon = () => {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    width: "24",
    height: "24",
    viewBox: "0 0 24 24",
    fill: "none",
    xmlns: "http://www.w3.org/2000/svg",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
      width: "24",
      height: "24",
      rx: "5",
      fill: "#F0F0F1"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M7.50324 20V6.4H9.80324V20H7.50324ZM2.94324 8.1V6H14.3632V8.1H2.94324Z",
      fill: "#FF0000"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M18.8569 8.66664C18.8569 8.84346 18.9272 9.01302 19.0522 9.13805C19.1772 9.26307 19.3468 9.33331 19.5236 9.33331L21.4829 9.33331C21.6339 9.30385 21.7904 9.32751 21.9259 9.40028C22.0615 9.47304 22.1677 9.59044 22.2265 9.73256C22.2854 9.87468 22.2933 10.0328 22.2489 10.1801C22.2045 10.3273 22.1105 10.4547 21.9829 10.5406L17.4256 15.0973C17.3509 15.172 17.2622 15.2313 17.1645 15.2718C17.0669 15.3122 16.9623 15.333 16.8566 15.333C16.7509 15.333 16.6463 15.3122 16.5486 15.2718C16.451 15.2313 16.3623 15.172 16.2876 15.0973L11.7309 10.5406C11.6033 10.4547 11.5094 10.3273 11.465 10.1801C11.4206 10.0328 11.4285 9.87468 11.4873 9.73256C11.5462 9.59044 11.6524 9.47304 11.7879 9.40028C11.9234 9.32751 12.0799 9.30385 12.2309 9.33331L14.1902 9.33331C14.3671 9.33331 14.5366 9.26307 14.6617 9.13805C14.7867 9.01302 14.8569 8.84346 14.8569 8.66664L14.8569 7.33331C14.8569 7.1565 14.9272 6.98693 15.0522 6.86191C15.1772 6.73688 15.3468 6.66664 15.5236 6.66664L18.1902 6.66664C18.3671 6.66664 18.5366 6.73688 18.6617 6.86191C18.7867 6.98693 18.8569 7.1565 18.8569 7.33331L18.8569 8.66664Z",
      fill: "black",
      stroke: "black",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M18.8567 4L14.8567 4",
      stroke: "black",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ScrollTextIcon);

/***/ }),

/***/ "./src/scroll-text-block/block.json":
/*!******************************************!*\
  !*** ./src/scroll-text-block/block.json ***!
  \******************************************/
/***/ ((module) => {

module.exports = /*#__PURE__*/JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":3,"name":"create-block/scroll-text-block","version":"0.1.0","title":"Scroll Text","category":"widgets","description":"A scroll-triggered text animation block using GSAP.","example":{},"supports":{"html":false},"textdomain":"scroll-text-block","editorScript":"file:./index.js","editorStyle":"file:./index.css","style":"file:./style-index.css","viewScript":"file:./view.js","attributes":{"heroText":{"type":"string","default":"Hello from Adaire x GSAP!"},"backgroundColor":{"type":"string","default":"#ffffff"},"fontSize":{"type":"number","default":32},"fontSizeUnit":{"type":"string","default":"px"},"textColor":{"type":"string","default":"#000000"},"animationSpeed":{"type":"number","default":1},"scrollDirection":{"type":"string","default":"left"},"blockId":{"type":"string","default":""},"marginTop":{"type":"number","default":0},"marginBottom":{"type":"number","default":0},"marginLeft":{"type":"number","default":0},"marginRight":{"type":"number","default":0},"paddingTop":{"type":"number","default":0},"paddingBottom":{"type":"number","default":0},"paddingLeft":{"type":"number","default":0},"paddingRight":{"type":"number","default":0},"fontWeight":{"type":"string","default":"400"},"backgroundColorOpacity":{"type":"number","default":1},"containerWidth":{"type":"number","default":100},"containerWidthUnit":{"type":"string","default":"vw"},"containerHeight":{"type":"number","default":100},"containerHeightUnit":{"type":"string","default":"vh"},"pinHeight":{"type":"number","default":100},"pinHeightUnit":{"type":"string","default":"vh"}},"icon":"<svg\\r\\n\\t\\t\\twidth=\\"24\\"\\r\\n\\t\\t\\theight=\\"24\\"\\r\\n\\t\\t\\tviewBox=\\"0 0 24 24\\"\\r\\n\\t\\t\\tfill=\\"none\\"\\r\\n\\t\\t\\txmlns=\\"http://www.w3.org/2000/svg\\"\\r\\n\\t\\t>\\r\\n\\t\\t\\t<rect width=\\"24\\" height=\\"24\\" rx=\\"5\\" fill=\\"#F0F0F1\\" />\\r\\n\\t\\t\\t<path\\r\\n\\t\\t\\t\\td=\\"M7.50324 20V6.4H9.80324V20H7.50324ZM2.94324 8.1V6H14.3632V8.1H2.94324Z\\"\\r\\n\\t\\t\\t\\tfill=\\"#FF0000\\"\\r\\n\\t\\t\\t/>\\r\\n\\t\\t\\t<path\\r\\n\\t\\t\\t\\td=\\"M18.8569 8.66664C18.8569 8.84346 18.9272 9.01302 19.0522 9.13805C19.1772 9.26307 19.3468 9.33331 19.5236 9.33331L21.4829 9.33331C21.6339 9.30385 21.7904 9.32751 21.9259 9.40028C22.0615 9.47304 22.1677 9.59044 22.2265 9.73256C22.2854 9.87468 22.2933 10.0328 22.2489 10.1801C22.2045 10.3273 22.1105 10.4547 21.9829 10.5406L17.4256 15.0973C17.3509 15.172 17.2622 15.2313 17.1645 15.2718C17.0669 15.3122 16.9623 15.333 16.8566 15.333C16.7509 15.333 16.6463 15.3122 16.5486 15.2718C16.451 15.2313 16.3623 15.172 16.2876 15.0973L11.7309 10.5406C11.6033 10.4547 11.5094 10.3273 11.465 10.1801C11.4206 10.0328 11.4285 9.87468 11.4873 9.73256C11.5462 9.59044 11.6524 9.47304 11.7879 9.40028C11.9234 9.32751 12.0799 9.30385 12.2309 9.33331L14.1902 9.33331C14.3671 9.33331 14.5366 9.26307 14.6617 9.13805C14.7867 9.01302 14.8569 8.84346 14.8569 8.66664L14.8569 7.33331C14.8569 7.1565 14.9272 6.98693 15.0522 6.86191C15.1772 6.73688 15.3468 6.66664 15.5236 6.66664L18.1902 6.66664C18.3671 6.66664 18.5366 6.73688 18.6617 6.86191C18.7867 6.98693 18.8569 7.1565 18.8569 7.33331L18.8569 8.66664Z\\"\\r\\n\\t\\t\\t\\tfill=\\"black\\"\\r\\n\\t\\t\\t\\tstroke=\\"black\\"\\r\\n\\t\\t\\t\\tstrokeLinecap=\\"round\\"\\r\\n\\t\\t\\t\\tstrokeLinejoin=\\"round\\"\\r\\n\\t\\t\\t/>\\r\\n\\t\\t\\t<path\\r\\n\\t\\t\\t\\td=\\"M18.8567 4L14.8567 4\\"\\r\\n\\t\\t\\t\\tstroke=\\"black\\"\\r\\n\\t\\t\\t\\tstrokeLinecap=\\"round\\"\\r\\n\\t\\t\\t\\tstrokeLinejoin=\\"round\\"\\r\\n\\t\\t\\t/>\\r\\n\\t\\t</svg>"}');

/***/ }),

/***/ "./src/scroll-text-block/edit.js":
/*!***************************************!*\
  !*** ./src/scroll-text-block/edit.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Edit)
/* harmony export */ });
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__);




// Helper function to convert hex to RGB

function hexToRgb(hex) {
  const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? `${parseInt(result[1], 16)}, ${parseInt(result[2], 16)}, ${parseInt(result[3], 16)}` : '255, 255, 255';
}
function Edit({
  attributes,
  setAttributes
}) {
  const {
    heroText,
    backgroundColor,
    backgroundColorOpacity,
    containerWidth,
    containerWidthUnit,
    containerHeight,
    containerHeightUnit,
    pinHeight,
    pinHeightUnit,
    fontSize,
    fontWeight,
    textColor,
    fontSizeUnit,
    animationSpeed,
    scrollDirection,
    blockId,
    marginTop,
    marginBottom,
    marginLeft,
    marginRight,
    paddingTop,
    paddingBottom,
    paddingLeft,
    paddingRight
  } = attributes;
  const wrapperRef = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.useRef)(null);
  const blockProps = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.useBlockProps)({
    className: 'ad-scroll-text-block-editor',
    style: {
      backgroundColor: backgroundColor ? `rgba(${hexToRgb(backgroundColor)}, ${backgroundColorOpacity !== undefined ? backgroundColorOpacity : 1})` : undefined,
      width: `${containerWidth || 100}${containerWidthUnit || "vw"}`,
      height: `${containerHeight || 100}${containerHeightUnit || "vh"}`,
      // Ensure block is selectable
      position: 'relative',
      zIndex: 1,
      pointerEvents: 'auto'
    }
  });

  // Minimal event handling to ensure both block and parent are selectable
  (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.useEffect)(() => {
    const el = wrapperRef.current;
    if (!el) return;
    const onPointerDown = e => {
      // eslint-disable-next-line no-console
      console.log('[ScrollText][Editor] pointerdown', {
        target: e.target && (e.target.className || e.target.nodeName),
        button: e.button
      });

      // Only handle if it's a direct click on the block wrapper
      // Don't interfere with text editing or parent selection
      if (e.target === el && e.button === 0) {
        // This is a direct click on the block wrapper
        // Let WordPress handle the selection
        return;
      }
    };

    // Use capture: false to allow natural event flow
    el.addEventListener('pointerdown', onPointerDown, {
      capture: false
    });
    return () => {
      el.removeEventListener('pointerdown', onPointerDown, {
        capture: false
      });
    };
  }, []);
  const parseNum = (val, attr) => {
    console.log("Raw value:", val);
    const num = Number(val);
    console.log("Parsed number:", num);
    if (!isNaN(num) && val !== "") {
      setAttributes({
        [attr]: num
      });
    } else {
      console.warn("Invalid input:", val);
    }
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.InspectorControls, {
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
        title: "Background Color",
        initialOpen: true,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.ColorPicker, {
          color: backgroundColor,
          onChangeComplete: color => setAttributes({
            backgroundColor: color.hex
          }),
          disableAlpha: true
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl, {
          label: "Background Opacity",
          value: backgroundColorOpacity,
          onChange: value => setAttributes({
            backgroundColorOpacity: value
          }),
          min: 0,
          max: 1,
          step: 0.1,
          help: "Control the transparency of the background color (0 = transparent, 1 = opaque)"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
        title: "Text Color",
        initialOpen: false,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.ColorPicker, {
          color: textColor,
          onChangeComplete: color => setAttributes({
            textColor: color.hex
          }),
          disableAlpha: true
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
        title: "Container Dimensions",
        initialOpen: false,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Container Width",
          value: containerWidth,
          type: "number",
          onChange: value => {
            parseNum(value, "containerWidth");
          },
          min: 1,
          help: "Set the width of the container"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
          label: "Width Unit",
          value: containerWidthUnit,
          options: [{
            label: "Viewport Width (vw)",
            value: "vw"
          }, {
            label: "Pixels (px)",
            value: "px"
          }, {
            label: "Percentage (%)",
            value: "%"
          }],
          onChange: value => setAttributes({
            containerWidthUnit: value
          }),
          help: "Choose the unit for the container width"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Container Height",
          value: containerHeight,
          type: "number",
          onChange: value => {
            parseNum(value, "containerHeight");
          },
          min: 1,
          help: "Set the height of the container"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
          label: "Height Unit",
          value: containerHeightUnit,
          options: [{
            label: "Viewport Height (vh)",
            value: "vh"
          }, {
            label: "Pixels (px)",
            value: "px"
          }, {
            label: "Percentage (%)",
            value: "%"
          }],
          onChange: value => setAttributes({
            containerHeightUnit: value
          }),
          help: "Choose the unit for the container height"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
        title: "Font Options",
        initialOpen: false,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Font Size",
          value: fontSize,
          type: "number",
          onChange: value => {
            parseNum(value, "fontSize");
          },
          min: 1
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
          label: "Font Size Unit",
          value: fontSizeUnit,
          options: [{
            label: "Pixels (px)",
            value: "px"
          }, {
            label: "Viewport Width (vw)",
            value: "vw"
          }],
          onChange: value => setAttributes({
            fontSizeUnit: value
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
          label: "Font Weight",
          value: fontWeight,
          options: [{
            label: "Light (300)",
            value: 300
          }, {
            label: "Normal (400)",
            value: 400
          }, {
            label: "Medium (500)",
            value: 500
          }, {
            label: "Semi Bold (600)",
            value: 600
          }, {
            label: "Bold (700)",
            value: 700
          }, {
            label: "Extra Bold (800)",
            value: 800
          }, {
            label: "Black (900)",
            value: 900
          }],
          onChange: value => setAttributes({
            fontWeight: value
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
        title: "Margin (px)",
        initialOpen: false,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Top Margin",
          value: marginTop,
          type: "number",
          onChange: value => {
            parseNum(value, "marginTop");
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Bottom Margin",
          value: marginBottom,
          type: "number",
          onChange: value => {
            parseNum(value, "marginBottom");
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Right Margin",
          value: marginRight,
          type: "number",
          onChange: value => {
            parseNum(value, "marginRight");
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Left Margin",
          value: marginLeft,
          type: "number",
          onChange: value => {
            parseNum(value, "marginLeft");
          }
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
        title: "Padding (px)",
        initialOpen: false,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Top Padding",
          value: paddingTop,
          type: "number",
          onChange: value => {
            parseNum(value, "paddingTop");
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Bottom Padding",
          value: paddingBottom,
          type: "number",
          onChange: value => {
            parseNum(value, "paddingBottom");
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Right Padding",
          value: paddingRight,
          type: "number",
          onChange: value => {
            parseNum(value, "paddingRight");
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Left Padding",
          value: paddingLeft,
          type: "number",
          onChange: value => {
            parseNum(value, "paddingLeft");
          }
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
        title: "Animation Settings",
        initialOpen: false,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl, {
          label: "Animation Speed",
          value: animationSpeed,
          onChange: value => setAttributes({
            animationSpeed: value
          }),
          min: 0.1,
          max: 3,
          step: 0.1,
          help: "Controls the speed of GSAP animations. Lower values = slower, higher values = faster."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
          label: "Scroll Direction",
          value: scrollDirection,
          options: [{
            label: "Move Left",
            value: "left"
          }, {
            label: "Move Right",
            value: "right"
          }],
          onChange: value => setAttributes({
            scrollDirection: value
          }),
          help: "Choose the direction the text moves as you scroll."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Pin Height",
          value: pinHeight,
          type: "number",
          onChange: value => {
            parseNum(value, "pinHeight");
          },
          min: 1,
          help: "Set the height of the .pin-height class"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
          label: "Pin Height Unit",
          value: pinHeightUnit,
          options: [{
            label: "Viewport Height (vh)",
            value: "vh"
          }, {
            label: "Pixels (px)",
            value: "px"
          }, {
            label: "Percentage (%)",
            value: "%"
          }],
          onChange: value => setAttributes({
            pinHeightUnit: value
          }),
          help: "Choose the unit for the pin height"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
        title: "Block Settings",
        initialOpen: false,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.TextControl, {
          label: "Block ID",
          value: blockId,
          onChange: value => setAttributes({
            blockId: value
          }),
          help: "Add a custom ID to this block for CSS targeting or anchor links."
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("section", {
      ...blockProps,
      ref: wrapperRef,
      className: "ad-scroll-text-block",
      "data-editor": "true",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("div", {
        className: "ad-scroll-text-block__content",
        style: {
          overflow: "hidden"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText, {
          tagName: "h1",
          value: heroText,
          onChange: value => setAttributes({
            heroText: value
          }),
          placeholder: "Enter hero text...",
          style: {
            whiteSpace: "nowrap",
            fontSize: fontSize + (fontSizeUnit || "px"),
            color: textColor || undefined,
            paddingTop: paddingTop + "px",
            paddingBottom: paddingBottom + "px",
            paddingRight: paddingRight + "px",
            paddingLeft: paddingLeft + "px",
            marginTop: marginTop + "px",
            marginBottom: marginBottom + "px",
            marginRight: marginRight + "px",
            marginLeft: marginLeft + "px",
            fontWeight: fontWeight
          }
        })
      })
    })]
  });
}

/***/ }),

/***/ "./src/scroll-text-block/index.js":
/*!****************************************!*\
  !*** ./src/scroll-text-block/index.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./style.scss */ "./src/scroll-text-block/style.scss");
/* harmony import */ var _edit__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./edit */ "./src/scroll-text-block/edit.js");
/* harmony import */ var _save__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./save */ "./src/scroll-text-block/save.js");
/* harmony import */ var _block_json__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./block.json */ "./src/scroll-text-block/block.json");
/* harmony import */ var _icons_scroll_text__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../icons/scroll-text */ "./src/icons/scroll-text.js");
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
  icon: _icons_scroll_text__WEBPACK_IMPORTED_MODULE_5__["default"]
});

/***/ }),

/***/ "./src/scroll-text-block/save.js":
/*!***************************************!*\
  !*** ./src/scroll-text-block/save.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ save)
/* harmony export */ });
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// Helper function to convert hex to RGB

function hexToRgb(hex) {
  const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? `${parseInt(result[1], 16)}, ${parseInt(result[2], 16)}, ${parseInt(result[3], 16)}` : '255, 255, 255';
}
function save({
  attributes
}) {
  const {
    heroText,
    backgroundColor,
    backgroundColorOpacity,
    containerWidth,
    containerWidthUnit,
    containerHeight,
    containerHeightUnit,
    pinHeight,
    pinHeightUnit,
    fontSize,
    fontWeight,
    textColor,
    fontSizeUnit,
    animationSpeed,
    scrollDirection,
    blockId,
    marginTop,
    marginBottom,
    marginLeft,
    marginRight,
    paddingTop,
    paddingBottom,
    paddingLeft,
    paddingRight
  } = attributes;
  const blockProps = _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.useBlockProps.save({
    className: "ad-scroll-text-block",
    style: {
      backgroundColor: backgroundColor ? `rgba(${hexToRgb(backgroundColor)}, ${backgroundColorOpacity !== undefined ? backgroundColorOpacity : 1})` : undefined,
      width: `${containerWidth || 100}${containerWidthUnit || "vw"}`,
      height: `${containerHeight || 100}${containerHeightUnit || "vh"}`,
      "--padding-top": `${paddingTop}px`,
      "--padding-bottom": `${paddingBottom}px`,
      "--padding-left": `${paddingLeft}px`,
      "--padding-right": `${paddingRight}px`,
      "--margin-top": `${marginTop}px`,
      "--margin-bottom": `${marginBottom}px`,
      "--margin-left": `${marginLeft}px`,
      "--margin-right": `${marginRight}px`,
      "--font-weight": fontWeight || "400"
    },
    id: blockId || undefined
  });
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("section", {
    ...blockProps,
    "data-animation-speed": animationSpeed,
    "data-scroll-direction": scrollDirection,
    "data-pin-height": pinHeight,
    "data-pin-height-unit": pinHeightUnit,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "ad-scroll-text-block__content",
      style: {
        overflow: "hidden"
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_0__.RichText.Content, {
        tagName: "h1",
        value: heroText,
        style: {
          whiteSpace: "nowrap",
          fontSize: fontSize + (fontSizeUnit || "px"),
          color: textColor || undefined
        }
      })
    })
  });
}

/***/ }),

/***/ "./src/scroll-text-block/style.scss":
/*!******************************************!*\
  !*** ./src/scroll-text-block/style.scss ***!
  \******************************************/
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

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

module.exports = window["wp"]["element"];

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
/******/ 			"scroll-text-block/index": 0,
/******/ 			"scroll-text-block/style-index": 0
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
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["scroll-text-block/style-index"], () => (__webpack_require__("./src/scroll-text-block/index.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=index.js.map