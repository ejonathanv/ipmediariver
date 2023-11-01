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
        }
    }
}).mount("#app");
