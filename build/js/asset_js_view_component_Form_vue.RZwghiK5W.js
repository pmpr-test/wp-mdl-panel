/*! For license information please see asset_js_view_component_Form_vue.RZwghiK5W.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_Form_vue"],{4921:function(e,t,n){n.r(t),n.d(t,{default:function(){return r}});var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return e.hasField?n(e.tag,{tag:"component",attrs:{id:e.id}},[e._l(e.fields,(function(t,i){return[e._t("before-field-row",null,{field:t}),e._v(" "),e.is(t,"Header")?[n("PanelHeaderInput",{key:i,attrs:{title:t.title,tag:"h5",inline:e.inline,classes:"mb-4",vanished:e.isVanished(t)}})]:e.is(t,"File")?[n("PanelFileInput",{key:i,attrs:{props:e.prepareProps(t,"file")},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"Upload")?[n("PanelUploadInput",{key:i,attrs:{props:e.prepareProps(t,"file")},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"Text")?[n("PanelTextInput",{key:i,attrs:{props:e.prepareProps(t),mask:e.getMask(t),options:e.getMaskOptions(t)},on:{input:function(n){return e.onInputChange(n,t.id)}},scopedSlots:e._u([e.isRTL(t)&&t.icon?{key:"append",fn:function(){return[n("PanelIcon",{attrs:{icon:t.icon}})]},proxy:!0}:t.icon?{key:"preapend",fn:function(){return[n("PanelIcon",{attrs:{icon:t.icon}})]},proxy:!0}:null],null,!0)})]:e.is(t,"Radio")?[n("PanelRadioInput",{key:i,attrs:{props:e.prepareProps(t),options:e.prepareOptions(t.options)},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"Avatar")?[n("PanelAvatarInput",{key:i,attrs:{props:e.prepareProps(t)},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"TreeSelect")?[n("PanelTreeSelectInput",{key:i,attrs:{props:e.prepareProps(t),options:t.options,multiple:t.multiple,variations:e.prepareVariations(t)},on:{input:function(n){return e.onInputChange(n,t.id)}},scopedSlots:e._u([e.hasSlot("after-field")?{key:"after-field",fn:function(t){var n=t.field;return[e._t("after-field",null,{field:n})]}}:null],null,!0)})]:e.is(t,"Datepicker")?[n("PanelDatepickerInput",{key:i,attrs:{props:e.prepareProps(t)},on:{input:function(n){return e.onInputChange(n,t.id)}}})]:e.is(t,"Markup")?[n("PanelMarkupInput",{key:i,attrs:{props:e.prepareProps(t),content:t.content}})]:e.is(t,"Custom")?[n("PanelInput",e._b({scopedSlots:e._u([{key:"input",fn:function(){return[e._t("custom-field",null,{field:t})]},proxy:!0}],null,!0)},"PanelInput",e.prepareProps(t,"custom-field"),!1))]:[n("div",{class:"form-group"+(e.inline?" row":"")},[n("div",{class:e.inputContainerClass},[e._t("custom",null,{field:t,props:e.prepareProps(t)})],2)])],e._v(" "),e._t("after-field-row",null,{field:t})]}))],2):n("PanelSpinner")};i._withStripped=!0;const s=PRHelper.getType();var a={name:"PanelForm",data:()=>({values:{},ignores:{},vanished:{},rendered:!1,vanishables:{}}),props:{id:{type:String,default:"fields-container"},tag:{type:String,default:"div"},data:{type:[Object,Array],default:function(){return[]}},fields:{type:[Object,Array],default:function(){return[]}},inline:{type:[Object,Boolean],default:function(){return{xxl:"2"}}},groupClass:{type:String,default:""},size:{type:String,default:"lg"},solid:{type:Boolean,default:!0},labelAlign:{type:[String,Boolean],default:"right"},labelClass:{type:String,default:""},offset:{type:[Number,String],default:3}},beforeMount(){this.hasField&&(s.each(this.fields,(e=>{s.isEmpty(e.args.vanisher)||(this.vanishables[e.id]=e.args.vanisher)})),this.prepareVanishableFields())},mounted(){this.$hook.on("form:reset",(e=>{this.values=e,this.prepareVanishableFields()}))},beforeDestroy(){this.$hook.off("form:",!0)},computed:{hasField(){return!s.isEmpty(this.fields)},inputContainerClass(){let e="field-container col";return this.offset&&PRHelper.getType().each(this.inline,((t,n)=>{e+=` col-${n}-${12-this.offset}`})),e}},methods:{prepareVanishableFields:function(){this.vanishables&&(s.each(this.vanishables,((e,t)=>{const n=this.values[t]??this.data[t];s.each(e,(({fields:e,values:t,reverse:i})=>{let a=!1;("string"==typeof t&&n!=t||Array.isArray(t)&&!valuss.includes(n))&&(a=!0),"string"==typeof e&&(e=[e]),s.each(e,(e=>{this.vanished[e]!==a&&(this.vanished[e]=a,this.rendered=!1)}))}))})),this.rendered||this.$forceUpdate())},prepareOptions:function(e){let t=[];return s.each(e,((e,n)=>{"object"==typeof e?e.value=n:e={text:e,value:n},t.push(e)})),t},prepareVariations:function(e){let t={};return void 0!==e.args.variations&&(t=e.args.variations),t},isVanished:function(e){return!s.isEmpty(this.vanished[e.id])&&this.vanished[e.id]},prepareProps:function(e,t=null){null===t&&(t=e.type);let n={vanished:this.isVanished(e),ref:e.id,name:e.id,size:this.size,label:{text:e.label??e.title,attrs:e.label_attrs},solid:this.solid,attrs:e.attributes,inline:this.inline,offset:this.offset,disabled:e.args.disabled,required:e.args.required,container:e.container,labelAlign:this.labelAlign,labelVertical:"top"};"custom-field"===t&&(n.label=!(void 0===e.args.show_label||e.args.show_label)),["text","select"].includes(t)&&(n.labelVertical="middle");const i=this.getValue(e);switch(n.value=i,t){case"radio":n.stacked=!e.args.inline;break;case"file":n.file=i,n.limit=e.limit}return n},getMask:function(e){let t=!1;return s.isEmpty(e.args.maskable)||(t=e.args.maskable.mask),t},getMaskOptions:function(e){let t=!1;return s.isEmpty(e.args.maskable)||(t=e.args.maskable.options),t},isRTL:function(e){return this.getByPath(e,"rtl",!1)},is:function(e,t){return`Panel${t}Input`===this.getByPath(e,"component",!1)},getValue:function(e){let t=e.id,n=this.data,i=this.getByPath(n,t,"");return s.isEmpty(i)&&(i=this.getByPath(e,"value",""),s.isEmpty(i)&&(i=this.getByPath(e,"default",""))),i},onInputChange:function(e,t){s.isEmpty(t)||(this.$nextTick((()=>{this.rendered||(this.rendered=!0,this.$emit("rendered")),this.prepareVanishableFields()})),this.values[t]=e,this.$emit("changed",this.$helper.$toNormalObject(this.values)))}}},r=(0,n(9792).Z)(a,i,[],!1,null,null,null).exports}}]);