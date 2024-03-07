(()=>{"use strict";var e={n:r=>{var a=r&&r.__esModule?()=>r.default:()=>r;return e.d(a,{a}),a},d:(r,a)=>{for(var t in a)e.o(a,t)&&!e.o(r,t)&&Object.defineProperty(r,t,{enumerable:!0,get:a[t]})},o:(e,r)=>Object.prototype.hasOwnProperty.call(e,r)};const r=window.wp.blocks,a=window.React,t=(window.wp.data,window.wp.i18n),n=window.wp.components,l=window.wp.serverSideRender;var o=e.n(l);const c=window.wp.blockEditor,b=JSON.parse('{"u2":"bcn/breadcrumb-trail"}'),d=(0,a.createElement)("svg",{viewbox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true",focusable:"false"},(0,a.createElement)("path",{d:"M0.6 7.2C0.4 7.2 0.4 7.2 0.4 7.4V16.9C0.4 17.1 0.4 17.1 0.6 17.1H10.9C11.1 17.1 11.1 17.1 11.3 16.9L16 12.1 11.3 7.4C11.1 7.2 11.1 7.2 10.9 7.2ZM15 7.2 19.9 12.1 15 17.1H18.7C18.9 17.1 18.9 17.1 19.1 16.9L23.8 12.1 19.1 7.4C18.9 7.2 18.9 7.2 18.7 7.2Z"}));(0,r.registerBlockType)(b.u2,{icon:d,edit:function({attributes:e,setAttributes:r}){const l=e=>a=>r({[e]:a});return(0,a.createElement)("div",{...(0,c.useBlockProps)()},(0,a.createElement)(c.InspectorControls,null,(0,a.createElement)(n.PanelBody,{title:(0,t.__)("Breadcrumb Trail Settings","breadcrumb-navxt")},(0,a.createElement)("p",{className:"description"},(0,t.__)("Adjust the breadcrumb trail.","breadcrumb-navxt")),(0,a.createElement)(n.TextControl,{label:(0,t.__)("Tesxt to show before the trail","breadcrumb-navxt"),value:e.pretext,onChange:l("pretext")}),(0,a.createElement)(n.SelectControl,{label:(0,t.__)("Output trail format","breadcrumb-navxt"),value:e.format,options:[{value:"list",label:(0,t.__)("Ordered list elements","breadcrumb-navxt")},{value:"breadcrumblist_rdfa",label:(0,t.__)("Schema.org BreadcrumbList (RDFa)","breadcrumb-navxt")},{value:"breadcrumblist_rdfa_wai_aria",label:(0,t.__)("Schema.org BreadcrumbList (RDFa) with WAI-ARIA","breadcrumb-navxt")},{value:"breadcrumblist_microdata",label:(0,t.__)("Schema.org BreadcrumbList (microdata)","breadcrumb-navxt")},{value:"plain",label:(0,t.__)("Plane (no Schema.org BreadcrumbList)","breadcrumb-navxt")}],onChange:l("format")}),(0,a.createElement)(n.ToggleControl,{label:(0,t.__)("Link the breadcrumbs","breadcrumb-navxt"),checked:!!e.link,onChange:l("link")}),(0,a.createElement)(n.ToggleControl,{label:(0,t.__)("Reverse the order of the trail","breadcrumb-navxt"),checked:!!e.reverseOrder,onChange:l("reverseOrder")}),(0,a.createElement)(n.ToggleControl,{label:(0,t.__)("Hide the breadcrumb trail on the front page","breadcrumb-navxt"),checked:!!e.hideonHome,onChange:l("hideonHome")}),(0,a.createElement)(n.ToggleControl,{label:(0,t.__)("Ignore the breadcrumb cache","breadcrumb-navxt"),checked:!!e.ignoreCache,onChange:l("ignoreCache")}))),(0,a.createElement)(n.Disabled,null,(0,a.createElement)(o(),{block:"bcn/breadcrumb-trail",attributes:{...e},urlQueryArgs:""})))}})})();