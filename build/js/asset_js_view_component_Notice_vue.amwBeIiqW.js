/*! For license information please see asset_js_view_component_Notice_vue.amwBeIiqW.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_Notice_vue"],{8992:function(e,t,n){n.r(t),n.d(t,{default:function(){return o}});var s=function(){var e=this,t=e.$createElement,n=e._self._c||t;return e.content?n("div",{class:e.getClass},[n("PanelIcon",{attrs:{icon:e.prepareIcon,size:"xl",classes:"mr-4",color:"none"}}),e._v(" "),e.hasSlot("content")?e._e():["string"==typeof e.content?n("p",{staticClass:"fs-sm my-auto",domProps:{innerHTML:e._s(e.content)}}):e._l(e.content,(function(t,s){return n("ul",{staticClass:"fs-sm my-auto"},[n("li",{key:s},[e._v(e._s(t))])])}))],e._v(" "),e._t("content")],2):e._e()};s._withStripped=!0;var r={name:"PanelNotice",props:{icon:{type:[String,Boolean],default:!0},type:{type:String,default:"warning"},border:{type:[String,Boolean],default:"dashed"},classes:String,content:{type:[String,Array,Boolean],default:""}},computed:{prepareIcon(){let e=this.icon;if(e&&"string"!=typeof e)switch(this.type){case"warning":e="fasm/6/set/circle-exclamation";break;case"info":e="fasm/6/set/circle-info"}return e},getClass(){let e=`notice notice-${this.type} d-flex px-4 py-2 rounded`;return this.border&&(e+=" border","string"==typeof this.border&&(e+=` border-${this.border}`)),this.classes&&(e+=` ${this.classes}`),e}}},o=(0,n(9792).Z)(r,s,[],!1,null,null,null).exports}}]);