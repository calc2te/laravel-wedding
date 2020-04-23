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
        data() {
            return {
                bannerLink: 'https://www.instagram.com/ireneeeworld/',
                bannerTarget: '_blank',
                bannerMessage: '❤ 신부의 인스타로 <strong><u>라이브</u></strong> 보러가기'
            }
        },
        mounted() {
            let dateA = moment(new Date(), "YYYY-MM-DD");
            let dateB = moment('2020-04-25', "YYYY-MM-DD");

            if (dateA.diff(dateB) > 0) {
            } else {
                this.bannerLink = '#;'
                this.bannerTarget = '_self'
                this.bannerMessage = '결혼식 당일 라이브를 제공할 예정입니다 :)'
            }
        }
    }
</script>

<style scoped>

</style>