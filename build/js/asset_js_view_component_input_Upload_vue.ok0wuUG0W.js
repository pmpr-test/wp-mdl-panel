/*! For license information please see asset_js_view_component_input_Upload_vue.ok0wuUG0W.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_input_Upload_vue"],{9715:function(t,e,p){p.r(e),p.d(e,{default:function(){return l}});var r=function(){var t=this,e=t.$createElement,p=t._self._c||e;return p("PanelInput",t._b({scopedSlots:t._u([{key:"input",fn:function(e){var r=e.attrs;e.ref;return[p("vue2-dropzone",t._b({attrs:{options:t.prepareConfigs,useCustomSlot:!0}},"vue2-dropzone",t.prepareAttrs(r),!1),[p("h3",{staticStyle:{color:"#00b782"}},[t._v(t._s(t.translate("form.input.upload.title")))]),t._v(" "),p("strong",{staticClass:"subtitle"},[t._v(t._s(t.translate("form.input.upload.subtext")))])])]}},t.hasSlot("description")?{key:"description",fn:function(){return[t._t("description")]},proxy:!0}:null],null,!0)},"PanelInput",t.props,!1))};r._withStripped=!0;var n=p(1485),s=p.n(n),i=(p(2409),{name:"PanelUploadInput",components:{vue2Dropzone:s()},props:{props:{},config:{type:Object,default:function(){return{url:"https://httpbin.org/post",maxFiles:1,uploadMultiple:!1,autoProcessQueue:!1}}}},data:()=>({value:null,inputKey:0}),watch:{value(){this.$helper.$fileReader(this.value,this.props.limit).then((t=>{this.$emit("input",t)})).catch((()=>{this.inputKey++}))}},computed:{prepareConfigs(){let t=this.config;return this.props.limit>0&&(t.maxFilesize=this.props.limit),t}},methods:{prepareAttrs(t){let e={};return this.$helper.$each(["id","require","name","disabled","drop-placeholder","accept"],(p=>{t.hasOwnProperty(p)&&(e[p]=t[p])})),e.size=this.props.size,e}}}),l=(0,p(9792).Z)(i,r,[],!1,null,null,null).exports}}]);