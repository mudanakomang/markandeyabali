<template>
  <div class="embed-responsive embed-responsive-16by9">
   <iframe
      id="youtube-player-1"
      frameborder="0"
      allowfullscreen="1"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      title="YouTube video player"
      class="embed-responsive-item"
      :src="url"
    ></iframe>
    </div>
</template>
<script>
export default {
  data() {
    return {
        videoID:'jT2LBPtP3c',
    };
  },
  computed:{
     url(){
         return `https://www.youtube.com/embed/x${this.videoID}?autoplay=1&enablejsapi=1&widgetid=1`
     }
  }
};
</script>
<style scoped>

</style>
