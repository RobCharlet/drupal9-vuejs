<template>
  <div id="artists">
    <div class="row">
      <div class="col-md-3 col-sm-12" v-for="artist in artists" :key="artist.nid">
        <div class="card">
          <img 
            class="card-img-top artist_img" 
            :src="artist.field_artist_cover[0].url"
            :alt="artist.field_artist_cover[0].alt" 
            style="height: 200px;"
          >
          <div class="card-body">
            <h5 class="card-title artist_title">
              {{ artist.field_artist[0].value }}
            </h5>
            <div class="card-text">
              <p>
                <strong>Artist :</strong>
                <span>{{ artist.field_artist[0].value }}</span>
              </p>
              <p>
                <strong>Genres :</strong>
                <span v-for="genre in artist.field_genres" :key="genre.value">
                  {{genre.value}}
                </span>
              </p>
              <p>
                <strong>Labels :</strong>
                <span>{{ artist.field_label[0].value }}</span>
                <span v-for="label in artist.field_labels" :key="label.value">
                  {{ label.value }}
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'artists',
  //init data to be load into the component
  data() {
    return {
      artists: this.getArtists()||[]
    }
  },
  methods: {
    //sending request to get promise from the hitting URL
    getArtists: function() {
      this.$http
      .get("http://drupal9-vuejs.lndo.site/api/artist")
      .then(response => {
        this.artists = response.body;
        // console.log(this.artists);
      }, response => {
        console.log(`Error fetching data from URL make sure your server up running: ${response}`);
      });
    }
  }
}
</script>