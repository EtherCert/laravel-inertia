<script setup>
import Projects from "@/Components/Frontend/Projects.vue";

defineProps({
    skills : Object,
    projects : Object,
})
</script>
<template>
    <section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400]">
        <div class="container mx-auto"
             v-motion
             :initial="{
            opacity: 0,
            y: 100,
          }"
             :visibleOnce="{
             opacity: 1,
             y: 0,
             }">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p class="subtitle">
                    Over 500+ components — everything you need to build beautiful
                    application UIs, marketing sites, ecommerce stores, and more.
                </p>
                <Projects :skills="skills" :projects="projects"/>
            </div>
        </div>
    </section>
</template>
