<template>
    <div class="container">
        I'm an example componenaaaaat.
        <input v-model="message" placeholder="edíteme" />
        <p>El mensaje es: {{ message }}</p>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
