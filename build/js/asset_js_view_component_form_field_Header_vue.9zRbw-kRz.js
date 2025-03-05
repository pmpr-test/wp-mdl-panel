/*! For license information please see asset_js_view_component_form_field_Header_vue.9zRbw-kRz.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_form_field_Header_vue","asset_js_view_component_form_field_Field_vue"],{2032:function(e,t,i){i.r(t),i.d(t,{default:function(){return a}});var s=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",e._b({directives:[{name:"show",rawName:"v-show",value:!e.vanished,expression:"!vanished"}]},"div",e.getAttributes("field-wrapper"),!1),[e.title?i("div",e._b({},"div",e.getAttributes("label-wrapper"),!1),[e.isShowLabel?i("label",e._b({domProps:{innerHTML:e._s(e.title)}},"label",e.getAttributes("label"),!1)):e._e(),e._v(" "),e.isShowLabel&&e.hasStatus?i("div",[i("PanelCellStatus",{class:"field-status-"+(e.isVerified?"verified":"pending"),attrs:{light:"",title:e.verifyText,size:"sm",status:e.isVerified?"verified":"pending",statuses:{verified:"success",pending:"warning"}}})],1):e._e()]):e._e(),e._v(" "),i("div",e._b({},"div",e.getAttributes("input-wrapper"),!1),[e._t("input",null,{attributes:e.getAttributes("input")})],2),e._v(" "),e._t("before-description"),e._v(" "),e.description?i("div",e._b({domProps:{innerHTML:e._s(e.description)}},"div",e.getAttributes("description"),!1),[e._t("description")],2):e._e(),e._v(" "),e._t("after-description"),e._v(" "),e._t("after-field",null,{field:e.name})],2)};s._withStripped=!0;const r=PRHelper.getType();var l={name:"PanelField",props:{value:null,field:{type:Object,default:()=>({})},solid:{type:Boolean,default:()=>!0},inline:{type:[Object,Boolean],default:()=>({xxl:2})},labelXPos:{type:String,default:"end"},labelYPos:{type:String,default:"middle"},offset:{type:[Number,String],default:()=>3},size:{type:String,default:"lg"},attributes:{type:[Array,Object],default:()=>({})},vanished:{type:Boolean,default:!1}},data(){return{model:this.value}},watch:{model(){this.$emit("input",this.model)}},beforeMount(){this.model=this.value},computed:{isRTL(){return this.getFieldProp("rtl",!1)},isShowLabel(){return this.getFieldProp("show_label",!0)},isInline(){return this.getFieldProp("inline",!1)},isVerified(){return this.getFieldProp("verified",!1)},hasStatus(){return this.getFieldProp("verifiable",!1)&&this.model},name(){return this.getFieldProp("name","")},title(){return this.getFieldProp("title","")},description(){return this.getFieldProp("description","")},verifyText(){const e=this.isVerified?"verified":"pending";return this.translate(`form.input.verify.${e}`)},options(){const e=this.getFieldProp("options");let t=[];return PRHelper.getType().each(e,((e,i)=>{"object"==typeof e?e.value=i:e={id:i,icon:null,icon_class:"",label:e,text:e,value:i},t.push(e)})),t}},methods:{getFieldProp(e,t=null){let i=t;return void 0!==this.field[e]?i=this.field[e]:void 0!==this.field.args&&(i=this.field.args[e]),i},getAttributes(e,t={}){let i={};if("string"!=typeof e)return i;switch(PRHelper.getType().isEmpty(this.attributes)||void 0===this.attributes[e]||(i=this.attributes[e]),e){case"field-wrapper":const e=this.getFieldProp("container",{});r.isEmpty(e)||(i=r.merge(e.attributes,i,["class"]),i.id=e.id);break;case"label":i=r.merge(this.getFieldProp("label_attrs",{}),i,["class"]);break;case"input":i=r.merge(this.getFieldProp("attributes",{}),i,["class"])}let s=(i.class?i.class:"")+" "+(t.class??"");switch(s=new Set(s.split(" ")),e){case"field-wrapper":s.add("form-group"),this.inline?s.add("row"):s.delete("row"),this.vanished?s.add("pr-field-vanished"):s.delete("pr-field-vanished");break;case"append":s.add(`input-group input-group-${this.size}`),this.solid&&s.add("input-group-solid");break;case"description":s.add("text-dark-50 fs-xs mt-2"),this.inline&&(s.add("col"),r.each(this.inline,((e,t)=>{let i=this.offset;!1===this.title&&(e=0),t?t="-"+t:i=0,s.add(`col${t}-${12-e-i}`),s.add(`offset${t}-${e}`)})));break;case"input-wrapper":s.add("field-container"),this.inline&&(s.add("col"),r.each(this.inline,((e,t)=>{let i=this.offset;r.isEmpty(this.title)&&(e=0),t?t="-"+t:i=0,s.add(`col${t}-${12-e-i}`)})));break;case"input":i=r.parseArgs(i,{id:this.getFieldProp("id",""),name:this.getFieldProp("name",""),type:this.getFieldProp("type","text"),class:"",value:this.getFieldProp("value"),disabled:this.getFieldProp("disabled",!1),required:this.getFieldProp("required",!1),placeholder:this.getFieldProp("placeholder","")}),s.add(`form-control-${this.size}`),this.solid&&s.add("form-control-solid");break;case"label-wrapper":this.isShowLabel&&s.add("d-flex flex-row justify-content-between mb-2"),r.each(this.inline,((e,t)=>{t&&(t="-"+t,this.isShowLabel&&("middle"===this.labelYPos&&s.add(`my${t}-auto`),s.add(`justify-content${t}-${this.labelXPos}`),this.hasStatus&&s.add(`flex${t}-column`))),s.add(`col${t}-${e}`)}));break;case"label":s.add("font-size-h6 mb-0")}return i.class=Array.from(s).join(" ").trim(),r.each(i,((e,t)=>{r.isEmpty(e)&&delete i[t]})),i},prepareVariations(e){let t={};return void 0!==e.args.variations&&(t=e.args.variations),t}}},a=(0,i(9792).Z)(l,s,[],!1,null,null,null).exports},7391:function(e,t,i){i.r(t),i.d(t,{default:function(){return l}});var s=function(){var e=this,t=e.$createElement,i=e._self._c||t;return e.vanished?e._e():i("b-row",{staticClass:"mb-4 pr-field-header-type"},[i("b-col",e._b({},"b-col",e.colProps,!1),[i(e.tag,e._b({tag:"component",domProps:{innerHTML:e._s(e.title)}},"component",e.getAttributes("header",{class:"font-weight-bold"}),!1)),e._v(" "),e.description?i("div",{staticClass:"text-dark-50 fs-xs mt-2",domProps:{innerHTML:e._s(e.description)}}):e._e()],1)],1)};s._withStripped=!0;var r={name:"PanelHeaderField",extends:i(2032).default,props:{tag:{type:String,default:"h5"}},computed:{colProps(){let e={};return PRHelper.getType().each(this.inline,((t,i)=>{e[i]=12-t-this.offset,i&&(i="-"+i),e[`offset${i}`]=t})),e}}},l=(0,i(9792).Z)(r,s,[],!1,null,null,null).exports}}]);