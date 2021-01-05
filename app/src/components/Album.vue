<template>
  <div id="albums">
    <div class="row">
      <div class="col-md-3 col-sm-12" v-for="album in albums" :key="album.nid[0].value">
        <div class="card">
          <img
            class="card-img-top album_img"
            :src="album.field_album[0].url"
            :alt="album.field_album[0].alt"
            style="height: 200px;"
          >
          <div class="card-body">
            <h5 class="card-title album_title">
              {{ album.field_album_title[0].value }}
            </h5>
            <div class="card-text">
              <p>
                <strong>Producer :</strong>
                <span>{{ album.field_producer[0].value }}</span>
              </p>
<!--              <p>-->
<!--                <strong>Genres :</strong>-->
<!--                <span>-->
<!--                  {{album.field_genres[0].value}}-->
<!--                </span>-->
<!--              </p>-->
<!--              <p>-->
<!--                <strong>Labels :</strong>-->
<!--                <span>{{ album.field_label[0].value }}</span>-->
<!--              </p>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'albums',
  //init data to be load into the component
  data() {
    return {
      albums: this.getAlbums()||[]
    }
  },
  methods: {
    //sending request to get promise from the hitting URL
    getAlbums: function() {
      this.$http
      .get("http://drupal9-vuejs.lndo.site/api/album")
      .then(response => {
        this.albums = response.body;
        // console.log(this.albums);
      }, response => {
        console.log(`Error fetching data from URL make sure your server up running: ${response}`);
      });
    }
  }
}
</script>
