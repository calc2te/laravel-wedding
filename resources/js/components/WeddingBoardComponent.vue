<template>
    <div class="block text-gray-700 px-4 py-2 mt-4">
        <p class="font-east-sea-dokdo text-4xl text-center tracking-wide p-2">방명록</p>
        <div class="font-noti-serif-kr p-2 text-sm text-center mb-4">
            모든 분께 너무 감사드려요!
        </div>
        <div id="board-list" class="mb-8">
            <div class="w-full mb-2" v-for="board in getWeddingBoards" :value="board.no">
                <div class="border border-gray-400 bg-white rounded p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <p class="text-gray-700 text-base">{{ board.text }}</p>
                    </div>
                    <div class="flex items-center">
                        <div class="text-sm">
                            <span class="text-gray-900 leading-none">{{ board.name }}</span>
                            <span class="text-gray-600 text-xs"> ❤ {{ board.date }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="font-east-sea-dokdo text-4xl text-center tracking-wide p-2">하나 남겨주시겠어요?</p>
        <div class="font-noti-serif-kr p-2 text-sm text-center mb-4">
            모든 말들 감사히 받겠습니다!
        </div>
        <form class="w-full">
            <div class="flex flex-wrap">
                <div class="w-full">
                    <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight"
                           v-bind:class="{ 'border-red-500': nameError }"
                           id="" type="text" name="name" v-model.trim="name" placeholder="누구신가요?">
                    <p class="text-red-500 text-xs italic mb-3" v-show="nameError">누..구..?</p>
                </div>
                <div class="w-full">
                    <textarea
                            class="resize-none border rounded w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight"
                            v-bind:class="{ 'border-red-500': textError }"
                            id="" type="text" name="text" v-model.trim="text" placeholder="한 마디 남겨주시겠어요?"></textarea>
                    <p class="text-red-500 text-xs italic mb-3" v-show="textError">한 마디..좀..?</p>
                </div>
            </div>
            <button type="button" id="writeButton" class="w-full bg-yellow-400 text-black text-center py-2 px-4 rounded"
                    @click="writeWeddingBoard">
                #옜다받아라
            </button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "WeddingBoard",
        data() {
            return {
                name: '',
                text: '',
                nameError: false,
                textError: false
            }
        },
        mounted() {
            this.$store.dispatch("getWeddingBoards");
        },
        computed: {
            getWeddingBoards() {
                return this.$store.getters.getWeddingBoards
            }
        },
        methods: {
            writeWeddingBoard() {
                dataLayer.push({
                    'event': 'clickWriteBoardButton'
                });

                let writeFlag = true;

                this.nameError = false;
                this.textError = false;

                if (this.name === '') {
                    writeFlag = false;
                    this.nameError = true;
                }
                if (this.text === '') {
                    writeFlag = false;
                    this.textError = true;
                }

                if (!writeFlag) {
                    return false;
                }

                axios({
                    method: 'POST',
                    url: 'api/weddingboard',
                    data: {
                        name: this.name,
                        text: this.text,
                    },
                }).then((response) => {
                    callConfetti();

                    this.$store.dispatch("getWeddingBoards");
                    this.name = '';
                    this.text = '';

                    dataLayer.push({
                        'event': 'writeBoard'
                    });
                }).catch(response => {
                    console.log(response);
                });
            }
        }
    }
</script>

<style scoped>

</style>