<template>
    <p class="control">
        <select :name="this.name" class="select" :id="this.id" :multiple="this.isMultiple">
           <slot></slot>
         </select>
    </p>
</template>

<script>
    export default{
        props:{
            name: String,
            id: String,
            multiple: String
        },

        computed: {
            isMultiple(){
                if(this.multiple){
                    return this.multiple.toLocaleString().localeCompare("true") ? "multiple" : "";
                }
            }
        }
    }
</script>