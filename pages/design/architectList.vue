<template>
	
	<!-- start 设计师列表 -->
	<view class="architect">
		<view class="architect-list" v-for="(item,key) in 6" :key="key">
			<stylistCard type="list"></stylistCard>
		</view>
	</view>
	<!-- end 设计师列表 -->
	
</template>

<script>
	import stylistCard from './components/stylistCard.vue'
	export default {
		components:{
			stylistCard
		}
	}
</script>

<style scoped lang="less">
	.architect{
		padding: 0 30rpx;
		box-sizing: border-box;
	}
	.architect-list{
		margin-top: 30rpx;
	}		
</style>
