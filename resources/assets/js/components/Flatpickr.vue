<template>
        <p class="control">
            <input type="text" :name="this.name" :id="this.name" class="input flatpickr" :data-default-date="this.defaultValue">
        </p>
</template>

<script>
    export default{
        props: ["name", "default-value"],
    }
</script>