<template>
    <div>
        <ul>
            <li v-for="merchandise in merchandises" :key="merchandise.id">
                {{ merchandise.name }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        initialMerchandises: {
            type: Array,
            required: true
        }
    },
    data() {
        return {
            merchandises: this.initialMerchandises
        }
    }
}
</script>


