<template>
    <div class="nav">
        <div class="work__filter">
            <select name="" id="">
                <option value="">Tous</option>
                <option value="">Clients</option>
                <option value="">Personnels</option>
            </select>
        </div>
    </div>
</template>

<script>
export default {
  name: 'FilterWork'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

.work__filter{

    display: flex;
    justify-content: center;
    
        select{
            width: 120px;
            height: 30px;
            border: .5px solid #ffff;
            font-size: 13px;
            color: #fff;
            background-color: #11ffee00;
            letter-spacing: .1rem;
            font-weight: 200;
        }
}

</style>