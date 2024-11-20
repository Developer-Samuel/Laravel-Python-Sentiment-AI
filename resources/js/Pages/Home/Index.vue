<template>
    <div class="w-full h-screen bg-gray-900 p-4">
        <div class="md:w-[750px] w-full mx-auto">
            <form @submit.prevent="submitForm" class="w-full">
                <input type="hidden" name="_token" :value="csrfToken" />
                <div class="form-group mb-4">
                    <label for="text" class="block text-white text-center text-xl font-bold">Text:</label>
                    <textarea
                        v-model="text"
                        class="border-0 rounded-lg outline-0 w-full mt-2 p-2 text-gray-900 resize-none"
                        rows="5"
                        placeholder="Write a text to analyze..."
                    ></textarea>
                </div>
                <div class="flex justify-center mt-4">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-black text-lg font-bold rounded-lg transition-linear duration-500 px-4 py-2 mt-4">Odoslať</button>
                </div>
            </form>
            <div class="flex justify-between text-white font-bold text-center mt-16">
                <div class="item flex flex-col justify-between">
                    <img :src="getImage('positive')">
                    <p class="text-xl mt-1.5">Positive:</p>
                    <p class="text-lg">{{ positiveCount }}</p>
                </div>
                <div class="item flex flex-col justify-between">
                    <img :src="getImage('neutral')">
                    <p class="text-xl mt-1.5">Neutral:</p>
                    <p class="text-lg">{{ neutralCount }}</p>
                </div>
                <div class="item flex flex-col justify-between">
                    <img :src="getImage('negative')" id="negative-img">
                    <p class="text-xl mt-1.5">Negative:</p>
                    <p class="text-lg">{{ negativeCount }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'Home',
    data() {
        return {
            text: '',
            csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            positiveCount: 0,
            neutralCount: 0,
            negativeCount: 0,
        };
    },
    mounted() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            axios.get('/api')
                .then(response => {
                    this.positiveCount = response.data.positiveCount;
                    this.neutralCount = response.data.neutralCount;
                    this.negativeCount = response.data.negativeCount;
                })
                .catch(error => {
                    console.error('Error fetching sentiment data:', error);
                });
        },
        submitForm() {
            axios.post('/api/analyze', {
                text: this.text
            })
                .then(response => {
                    const sentiment = response.data.sentiment.trim();

                    if (sentiment === 'positive') {
                        this.positiveCount++;
                        this.message = "The comment is positive.";
                    } else if (sentiment === 'neutral') {
                        this.neutralCount++;
                        this.message = "The comment is neutral.";
                    } else if (sentiment === 'negative') {
                        this.negativeCount++;
                        this.message = "The comment is negative.";
                    }

                    this.text = '';
                    this.fetchData();
                })
                .catch(error => {
                    console.error('Error submitting form:', error);
                });
        },
        getImage(imageName) {
            return `/img/${imageName}.png`;
        },
    },
};
</script>


<style>
#negative-img
{
    filter: invert(100%);
}
</style>
