<template>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-outline-secondary" type="button" id="button-addon1">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
          </svg>
      </button>
    </div>
    <input
      type="text"
      placeholder
      aria-label="Example text with button addon"
      aria-describedby="button-addon1"
    />
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
      </button>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
    input {
        width: 50px;
    }
</style>