<template>
  <div>
    <button
      class="btn-primary"
      style="height: 30px; width: 110px; border-radius: 4px; border: none;"
      @click="followUser"
      v-text="buttonText"
    ></button>
  </div>
</template>

<script>
export default {
  props: ["userName", "follows"],
  mounted() {
    console.log("Component mounted.");
  },

  data: function() {
    return {
      status: this.follows
    };
  },

  methods: {
    followUser() {
      axios
        .post("/follow/" + this.userName)
        .then(response => {
          this.status = !this.status;
          console.log(response.data);
        })
        .catch(errors => {
          if (errors.response.status == 401) {
            window.location = '/login';
          }
        });
    }
  },

  computed: {
    buttonText() {
      return this.status ? "following" : "follow";
    }
  }
};
</script>
