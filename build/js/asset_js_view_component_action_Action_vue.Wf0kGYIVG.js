/*! For license information please see asset_js_view_component_action_Action_vue.Wf0kGYIVG.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_action_Action_vue"],{9990:function(t,e,i){i.r(e),i.d(e,{default:function(){return s}});var a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("b-button",t._b({on:{click:t.handleClick}},"b-button",t.prepareProps,!1),[t.icon?i("PanelIcon",{staticClass:"mr-2",attrs:{icon:t.icon,color:t.variant}}):t._e(),t._v(" "),t.actionText?i("span",{domProps:{innerHTML:t._s(t.actionText)}}):t._e()],1)};a._withStripped=!0;var n={name:"PanelAction",props:{variant:{type:String,default:"primary"},text:{type:String,default:""},name:{type:String,default:""},icon:{type:[String,Boolean],default:!1},href:{type:String,default:""},to:{type:[Object,String],default:""},light:{type:Boolean,default:!1},disabled:{type:Boolean,default:!1},asAction:{type:[Object,Boolean],default:!1},size:{type:String,default:""}},computed:{prepareProps(){let t={id:this.name,to:this.to,href:this.href,size:this.size,class:`action-${this.name}`,variant:this.actionVariant,disabled:this.disabled};if(this.asAction){let e=this.getByPath(this.asAction,"px",8),i=this.getByPath(this.asAction,"py",3);t.class+=` font-weight-bold font-size-h6 px-${e} py-${i}`}return t},actionVariant(){let t=this.variant;if(!t){t={add:"success",show:"primary",list:"primary",edit:"info",delete:"danger",update:"info",remove:"danger",details:"primary"}[this.name]}return this.light&&(t=`light-${t}`),t},actionText(){let t=this.text;return t||(t=this.translate(`action.${this.name}`)),t}},methods:{handleClick(){this.$emit("click")}}},s=(0,i(9792).Z)(n,a,[],!1,null,null,null).exports}}]);