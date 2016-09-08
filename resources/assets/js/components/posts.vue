<template>
  <button v-on:click="getPosts">Atualizar</button>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody v-if="!loading">
      <tr v-for="post in posts" track-by="id">
        <td>{{ post.id }}</td>
        <td>{{ post.title }}</td>
        <td>{{ post.description }}</td>
        <td>
          <button v-on:click="deletePost(post.id)">Excluir</button>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
  export default {
    data() {
        return {
          posts: [],
          loading: false
        }
    },

    ready() {
      this.getPosts();
    },

    methods: {
      getPosts() {
        this.loading = true;

        this.$http.get('/api/posts').then(function (response) {
            this.posts = response.json();
            this.loading = false;
        });
      },

      deletePost(postId) {
        this.$http.delete('/api/posts/' + postId).then(function (response) {
            this.getPosts();
        });
      }
    }
  }
</script>
