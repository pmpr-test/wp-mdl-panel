/*! For license information please see asset_js_view_component_Nav_vue.Wf0kGYIVG.js.LICENSE.txt */
"use strict";(self.webpackChunkpmpr_wp_mdl_panel=self.webpackChunkpmpr_wp_mdl_panel||[]).push([["asset_js_view_component_Nav_vue"],{6139:function(t,e,a){a.r(e),a.d(e,{default:function(){return s}});var l=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("ul",{class:t.containerClass,attrs:{role:t.role}},t._l(t.items,(function(e,l){return a("li",{key:l,staticClass:"nav-item"},[a("a",{class:{active:t.active===e.name,"nav-link py-2 px-4":!0},attrs:{href:"#","data-toggle":"tab"},on:{click:function(a){return t.handleClick(e.name)}}},[a("span",{class:"nav-text font-size-"+t.size},[t._v(t._s(e.title))])])])})),0)};l._withStripped=!0;var n={name:"PanelNav",props:{items:{type:Array,default:()=>({})},role:{type:String,default:"tablist"},size:{type:String,default:"md"},color:{type:String,default:"dark-75"},active:{type:String,default:""},pills:{type:Boolean,default:!0}},computed:{containerClass(){let t=new Set(["nav"]);return this.color&&t.add(`nav-${this.color}`),this.pills&&(t.add("nav-pills"),t.add(`nav-pills-${this.size}`)),Array.from(t).join(" ")}},methods:{handleClick(t){this.$emit("nav-changed",t)}}},s=(0,a(9792).Z)(n,l,[],!1,null,null,null).exports}}]);