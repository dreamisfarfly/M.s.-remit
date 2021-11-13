<template>
	<!-- start 近期团购 -->
	<view class="recent-deals">
		<cardHeader title="近期团购" skipUrl="/pages/market/recentDeals"></cardHeader>
		<scroll-view scroll-x="true" class="scroll-view_H">
			<view class="group-view" v-for="(item,key) in 4" :key="key">
				<groupPurchaseCard></groupPurchaseCard>
			</view>
		</scroll-view>
	</view>
	<!-- end 近期团购 -->
</template>

<script>
	import groupPurchaseCard from './groupPurchaseCard.vue';
	export default {
		name: "hot",
		components:{
			groupPurchaseCard
		},
		data() {
			return {
				
			}
		},
		methods:{
			
		}
	}
</script>

<style scoped lang="less">
	.group-view{
		width: 622rpx;
		display: inline-block;
		margin-right: 30rpx;
	}
</style>
