/*! For license information please see asset_js_view_component_action_ModalActions_vue.l5LpZ_PeE.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_action_ModalActions_vue"],{30:function(e,n,t){t.r(n),t.d(n,{default:function(){return c}});var l=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{staticClass:"text-center pt-5"},[e.showSubmit?t("PanelActionSubmit",e._b({class:e.showCancel?"mr-5":"",on:{click:e.handleSubmit}},"PanelActionSubmit",e.submitActionProps,!1)):e._e(),e._v(" "),e.showCancel?t("PanelActionCancel",e._b({on:{click:e.handleCancel}},"PanelActionCancel",e.cancelActionProps,!1)):e._e()],1)};l._withStripped=!0;var a={name:"PanelModalActions",props:{showCancel:{type:Boolean,default:!0},showSubmit:{type:Boolean,default:!0},submitActionProps:{},cancelActionProps:{}},methods:{handleCancel(){this.$emit("canceled")},handleSubmit(){this.$emit("submitted")}}},c=(0,t(9792).Z)(a,l,[],!1,null,null,null).exports}}]);