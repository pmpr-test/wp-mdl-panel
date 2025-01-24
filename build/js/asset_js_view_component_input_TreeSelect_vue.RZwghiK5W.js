/*! For license information please see asset_js_view_component_input_TreeSelect_vue.RZwghiK5W.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_input_TreeSelect_vue"],{9486:function(e,t,s){s.r(t),s.d(t,{default:function(){return l}});var n=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("PanelInput",e._b({scopedSlots:e._u([{key:"input",fn:function(t){var n=t.attrs;t.ref;return[s("treeselect",e._b({attrs:{options:e.prepareOptions},scopedSlots:e._u([{key:"option-label",fn:function(t){var n=t.node;t.shouldShowCount,t.count,t.labelClassName,t.countClassName;return[s("div",{staticClass:"my-2 d-flex"},[s("PanelIcon",e._b({attrs:{color:"no-color"}},"PanelIcon",e.iconProps(n),!1)),e._v(" "),s("div",{staticClass:"my-auto"},[e._v(e._s(n.raw.label))])],1)]}},{key:"value-label",fn:function(t){var n=t.node;return[s("div",{staticClass:"d-flex"},[s("PanelIcon",e._b({attrs:{color:"no-color"}},"PanelIcon",e.iconProps(n),!1)),e._v(" "),s("div",{staticClass:"my-auto"},[e._v(e._s(n.raw.label))])],1)]}}],null,!0),model:{value:e.value,callback:function(t){e.value=t},expression:"value"}},"treeselect",e.prepareAttrs(n),!1))]}},{key:"desc",fn:function(){return e._l(e.foundVariations,(function(t){return t?s("div",[s("div",{staticClass:"text-primary mt-2",domProps:{innerHTML:e._s(t)}})]):e._e()}))},proxy:!0},e.hasSlot("after-field")?{key:"after-field",fn:function(t){var s=t.field;return[e._t("after-field",null,{field:s})]}}:null],null,!0)},"PanelInput",e.props,!1))};n._withStripped=!0;var a={name:"PanelTreeSelectInput",data:()=>({value:null,foundVariations:[]}),props:{props:{},options:{type:[Object,Array],default:()=>({})},variations:[],multiple:!1,clearable:!1,searchable:!0},watch:{value(){this.$emit("input",this.value),this.maybeFoundMatchVariations()}},beforeMount(){this.value=this.props.value},computed:{prepareOptions(){const e=[];return PRHelper.getType().each(this.options,((t,s)=>{"string"==typeof t&&e.push({id:s,icon:null,label:t,icon_class:""}),"object"==typeof t&&e.push(t)})),e}},methods:{maybeFoundMatchVariations(){let e=this.variations,t=[],s=this.value;s&&PRHelper.getType().each(e,(e=>{Object.values(e.values).includes(s)&&t.push(e.content)})),this.foundVariations=t},maybeGetIcon(e){return void 0!==this.options[e]?this.options[e].icon??"":""},maybeGetIconClass(e){return void 0!==this.options[e]?this.options[e].icon_class??"":""},iconProps(e){return{icon:this.maybeGetIcon(e.index),size:this.props.size,classes:"mr-3 "+this.maybeGetIconClass(e.index)}},trans(e,t){return this.translate(`treeselect.${e}`,t)},prepareAttrs(e){let t="";return this.props.solid&&(t+="vue-treeselect-solid"),this.props.size&&(t+=` vue-treeselect-${this.props.size}`),e.class=t,e={...e,multiple:this.multiple,clearable:this.clearable,searchable:this.searchable,limitText:e=>this.trans("limit",[e]),loadingText:this.trans("loading"),retryText:this.trans("retry.text"),retryTitle:this.trans("retry.title"),placeholder:this.trans("placeholder"),clearAllText:this.trans("clear_all"),searchPromptText:this.trans("search"),noResultsText:this.trans("no_results"),noOptionsText:this.trans("no_options"),clearValueText:this.trans("clear_value"),noChildrenText:this.trans("no_children")}}}},l=(0,s(9792).Z)(a,n,[],!1,null,null,null).exports}}]);