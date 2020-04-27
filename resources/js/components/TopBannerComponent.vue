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
                bannerLink: 'https://www.instagram.com/ireneeeworld/',
                bannerTarget: '_blank',
                bannerMessage: '❤ 신부의 인스타로 <strong><u>라이브</u></strong> 보러가기',
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

            this.dateNow = moment(new Date(), "YYYY-MM-DD HH:mm");
            this.dateThat = moment('2020-04-25 15:00', "YYYY-MM-DD HH:mm");
            this.diffTime = this.dateNow.diff(this.dateThat);

            if (this.diffTime <= 0) {
                this.timer = setInterval(this.refresh, 1000);

                this.bannerLink = '#;'
                this.bannerTarget = '_self'
                this.bannerMessage = '결혼식 당일 라이브를 제공할 예정입니다 :)'
            }
        },
        methods: {
            refresh: function () {
                this.dateNow = moment(new Date(), "YYYY-MM-DD HH:mm");
                this.diffTime = this.dateNow.diff(this.dateThat);

                if (this.diffTime > 0) {
                    clearInterval(this.timer);
                    callConfetti();

                    this.bannerLink = 'https://www.instagram.com/ireneeeworld/';
                    this.bannerTarget = '_blank';
                    this.bannerMessage = '❤ 신부의 인스타로 <strong><u>라이브</u></strong> 보러가기';
                }
            }
        }
    }
</script>

<style scoped>

</style>