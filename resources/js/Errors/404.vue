<template>
    <div class="bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl h-screen lg:py-16 lg:px-6">
            <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-blue-700">404</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold md:text-4xl text-white">Something's missing.</p>
                <p class="mb-4 text-lg font-light text-gray-500 text-gray-400">Sorry, we can't find that page. You'll find lots to explore on the home page. </p>
                <a href="/" class="inline-flex text-white bg-blue-700 outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">Back to Home</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'Error404',
}
</script>
