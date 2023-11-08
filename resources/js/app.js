import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const { createApp } = Vue;

createApp({
    data() {
        return {
            
        };
    },
    mounted() {
        this.headerOnScroll();
        this.driftWidget();
    },
    methods: {
        headerOnScroll(){
            let header = this.$refs.header;

            window.addEventListener('scroll', () => {
                if(window.scrollY > 0){
                    header.classList.add('onScroll');
                }else{
                    header.classList.remove('onScroll');
                }
            });
        },
        toggleNavMenu(){
            let navMenu = this.$refs.navMenu;
            navMenu.classList.toggle('active');
        },
        driftWidget(){
            "use strict";

            !function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
                t.factory = function(e) {
                return function() {
                    var n = Array.prototype.slice.call(arguments);
                    return n.unshift(e), t.push(n), t;
                };
                }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
                }), t.load = function(t) {
                var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
                };
            }
            }();
            drift.SNIPPET_VERSION = '0.3.1';
            drift.load('fiuz6dzn9s7v');
            drift.on('ready', function(api, payload) {
                api.openChat();
            });
        }
    }
}).mount("#app");
