/*! For license information please see asset_js_view_component_input_TreeSelect_vue.KaDEoePsn.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_input_TreeSelect_vue"],{8849:function(e,t,s){s.r(t),s.d(t,{default:function(){return l}});var n=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("PanelInput",e._b({scopedSlots:e._u([{key:"input",fn:function(t){var n=t.attrs;t.ref;return[s("treeselect",e._b({attrs:{options:e.options},scopedSlots:e._u([{key:"option-label",fn:function(t){var n=t.node;t.shouldShowCount,t.count,t.labelClassName,t.countClassName;return[s("div",{staticClass:"my-2"},[s("PanelIcon",e._b({},"PanelIcon",e.iconProps(n),!1)),e._v("\n          "+e._s(n.label)+"\n        ")],1)]}},{key:"value-label",fn:function(t){var n=t.node;return[s("PanelIcon",e._b({},"PanelIcon",e.iconProps(n),!1)),e._v("\n        "+e._s(n.raw.label)+"\n      ")]}}],null,!0),model:{value:e.value,callback:function(t){e.value=t},expression:"value"}},"treeselect",e.prepareAttrs(n),!1))]}},{key:"desc",fn:function(){return e._l(e.foundVariations,(function(t){return t?s("div",[s("div",{staticClass:"text-primary mt-2",domProps:{innerHTML:e._s(t)}})]):e._e()}))},proxy:!0},e.hasSlot("after-field")?{key:"after-field",fn:function(t){var s=t.field;return[e._t("after-field",null,{field:s})]}}:null],null,!0)},"PanelInput",e.props,!1))};n._withStripped=!0;var a={name:"PanelTreeSelectInput",data:()=>({value:null,foundVariations:[]}),props:{props:{},options:[],variations:[],multiple:!1,clearable:!1,searchable:!0},watch:{value(){this.$emit("input",this.value),this.maybeFoundMatchVariations()}},beforeMount(){this.value=this.props.value},methods:{maybeFoundMatchVariations(){let e=this.variations,t=[],s=this.value;s&&this.$helper.$each(e,(e=>{Object.values(e.values).includes(s)&&t.push(e.content)})),this.foundVariations=t},maybeGetIcon(e){return this.options[e].icon??""},maybeGetIconClass(e){return this.options[e].icon_class??""},iconProps(e){return{icon:this.maybeGetIcon(e.index),size:this.props.size,classes:"mr-3 "+this.maybeGetIconClass(e.index)}},trans(e,t){return this.translate(`treeselect.${e}`,t)},prepareAttrs(e){let t="";return this.props.solid&&(t+="vue-treeselect-solid"),this.props.size&&(t+=` vue-treeselect-${this.props.size}`),e.class=t,e={...e,multiple:this.multiple,clearable:this.clearable,searchable:this.searchable,limitText:e=>this.trans("limit",[e]),loadingText:this.trans("loading"),retryText:this.trans("retry.text"),retryTitle:this.trans("retry.title"),clearAllText:this.trans("clear_all"),searchPromptText:this.trans("search"),noResultsText:this.trans("no_results"),noOptionsText:this.trans("no_options"),clearValueText:this.trans("clear_value"),noChildrenText:this.trans("no_children")}}}},l=(0,s(9792).Z)(a,n,[],!1,null,null,null).exports}}]);