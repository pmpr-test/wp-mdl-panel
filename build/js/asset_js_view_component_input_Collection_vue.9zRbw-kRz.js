/*! For license information please see asset_js_view_component_input_Collection_vue.9zRbw-kRz.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_input_Collection_vue"],{7816:function(t,e,n){n.r(e),n.d(e,{default:function(){return i}});var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("PanelInput",t._b({scopedSlots:t._u([{key:"input",fn:function(e){e.attrs,e.ref;return t._l(t.items,(function(e,r){return n("PanelForm",{key:r,staticClass:"pr-collection-item",attrs:{tag:"fieldset",fields:t.props.fields,data:e},scopedSlots:t._u([{key:"after-fields",fn:function(e){e.fields;return[n("PanelAction",{attrs:{variant:"danger",text:t.props.args.remove_item}})]}}],null,!0)})}))}},t.hasSlot("description")?{key:"description",fn:function(){return[t._t("description")]},proxy:!0}:null],null,!0)},"PanelInput",t.props,!1),[t._v(" "),n("PanelAction",{attrs:{variant:"primary",text:t.props.args.add_item}})],1)};r._withStripped=!0;var s={name:"PanelCollectionInput",props:{value:{},props:{}},data(){return{items:[...this.value]}},watch:{items:{handler(t){this.$emit("input",t)},deep:!0}},methods:{addItem(){this.items.push("")},removeItem(t){this.items.splice(t,1)}}},i=(0,n(9792).Z)(s,r,[],!1,null,null,null).exports}}]);