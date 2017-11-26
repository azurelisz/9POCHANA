<template>
    <div id="all-food">
        <div class="foods">
            <figure class="snip1247">
                <img src="{{asset('img/1893.jpg')}}" alt="kfc"/>
            </figure>
            <figure class="snip1247">
                <img src="{{asset('img/2996.jpg')}}" alt="spgt"/>
            </figure>
            <figure class="snip1247">
                <img src="{{asset('img/breakfast.jpg')}}" alt="brf"/>
            </figure>
            <figure class="snip1247">
                <img src="{{asset('img/para4.jpg')}}" alt="brf"/>
            </figure>
            <figure class="snip1247">
                <img src="{{asset('img/1506.jpg')}}" alt="brf"/>
            </figure>
            <figure class="snip1247">
                <img src="{{asset('img/giphy.gif')}}" alt="brf"/>
            </figure>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
