/*! For license information please see asset_js_view_component_Modal_vue.9zRbw-kRz.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_Modal_vue"],{9574:function(e,o,t){t.r(o),t.d(o,{default:function(){return a}});var i=function(){var e=this,o=e.$createElement,t=e._self._c||o;return t("div",[e.button?t("b-button",e._b({directives:[{name:"b-modal",rawName:"v-b-modal",value:e.id,expression:"id"}],ref:e.id},"b-button",e.button,!1),[e._v("\n    "+e._s(e.button.title)+"\n  ")]):e._e(),e._v(" "),t("b-modal",e._b({attrs:{id:e.id,"no-close-on-backdrop":e.loading||!e.closable,"no-close-on-esc":e.loading||!e.closable,"hide-header-close":!e.closable},on:{show:function(o){return e.onShow(o)},hide:function(o){return e.onHide(o)}},scopedSlots:e._u([{key:"modal-header",fn:function(o){var i=o.close;return[e.hasSlot("header")||!e.title&&!e.description?e._e():[t("PanelCellHeader",{attrs:{title:e.title,description:e.description}}),e._v(" "),t("PanelOverlay",{directives:[{name:"show",rawName:"v-show",value:e.loading,expression:"loading"}]})],e._v(" "),e._t("header"),e._v(" "),e.closable?t("span",{attrs:{role:"button"},on:{click:i}},[t("PanelIcon",{attrs:{icon:"fasm/6/set/xmark",color:"dark"}})],1):e._e()]}}],null,!0),model:{value:e.visibility,callback:function(o){e.visibility=o},expression:"visibility"}},"b-modal",e.modal,!1),[e._v(" "),e._t("body",null,{close:e.hideModal})],2)],1)};i._withStripped=!0;var l={name:"PanelModal",props:{id:String,title:String,closable:{type:Boolean,default:!0},show:{type:Boolean,default:!1},modal:{type:Object,default:{centered:!0}},button:{type:[Boolean,Object],default:!1},description:String,loading:{type:Boolean,default:!1}},data(){return{visibility:this.show}},mounted(){this.$hook.on("modal:hide",(e=>{e===this.id&&this.hideModal()})),this.$hook.on("modal:show",(e=>{e===this.id&&this.showModal()}))},beforeDestroy(){this.$hook.off("modal:",!0)},methods:{onShow(e){this.$emit("modal-show",e)},onHide(e){this.$emit("modal-hide",e)},hideModal(){this.$root.$emit("bv::hide::modal",this.id)},showModal(){this.$root.$emit("bv::show::modal",this.id)}}},a=(0,t(9792).Z)(l,i,[],!1,null,null,null).exports}}]);