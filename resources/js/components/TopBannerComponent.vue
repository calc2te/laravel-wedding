<template>
    <div class="w-full bg-yellow-400 text-center">
        <a class="block py-3 px-4"
           :href="this.bannerLink"
           :target="this.bannerTarget"
           v-html="this.bannerMessage">
        </a>
    </div>
</template>

<script>
    export default {
        name: "TopBannerComponent",
        props: ['page'],
        data() {
            return {
                bannerLink: '/after',
                bannerTarget: '_self',
                bannerMessage: '❤ 결혼식 그 날의 모습 보러가기',
                timer: '',
                dateNow: '',
                dateThat: '',
                diffTime: 0,
            }
        },
        mounted() {
            if (this.page === 'after_page') {
                this.bannerLink = '/'
                this.bannerTarget = '_self'
                this.bannerMessage = '❤ 모바일 청첩장 보러가기'
            }
        },
        methods: {
        }
    }
</script>

<style scoped>

</style>