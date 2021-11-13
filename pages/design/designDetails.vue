<template>
	<!-- start 设计师详情 -->
	<view class="design-details build-content">
		<stylistCard type="personage"></stylistCard>
	</view>
	<!-- end 设计师详情 -->
</template>

<script>
	import stylistCard from './components/stylistCard.vue'
	export default {
		components:{
			stylistCard
		},
		data() {
			return {
				
			};
		}
	}
</script>

<style scoped lang="less">
	.design-details{
		margin-top: 20rpx;
	}
</style>
