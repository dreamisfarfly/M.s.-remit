<template>
	<!-- start 近期团购 -->
	<view class="recent-deals">
        <!-- start 近期团购列表 -->
		<view class="groun-list" v-for="(item,key) in 5" :key="key">
			<groupPurchaseCard></groupPurchaseCard>
		</view>
		<!-- end 近期团购列表 -->
	</view>
	<!-- end 近期团购 -->
</template>

<script>
	import groupPurchaseCard from './components/groupPurchaseCard.vue'
	export default {
		components:{
			groupPurchaseCard
		},
		data() {
			return {

			}
		},
		methods: {

		}
	}
</script>

<style scoped lang="less">
	.recent-deals {
		padding: 0 30rpx;
		box-sizing: border-box;
		font-family: PingFangSC-Medium, PingFang SC;
	}
	
	.groun-list{
		margin-top: 20rpx;
	}
</style>
