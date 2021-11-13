<template>
	<!-- start 我的订单 -->
	<view class="my-order">
		<!-- start 选项卡 -->
		<u-tabs-swiper ref="tabs" active-color="#1F2020" inactive-color="#CCCCCC" bar-height="8" bar-width="72"
			:list="list" :is-scroll="false" :current="current" @change="tabsChange"></u-tabs-swiper>
		<!-- end 选项卡 -->
		<!-- start 无数据 -->
		<view class="no-order-data" v-if="orderList.length == 0">
			<image class="no-order-data-img u-margin-top-136" src="@/static/images/no-order.png"></image>
		    <text class="hint u-margin-top-18 u-font-24">暂无订单~</text>
		</view>
		<!-- end 无数据 -->
		<view class="u-padding-top-30" v-if="orderList.length != 0">
			<orderCard
			v-for="(item,key) in 5" 
			:key="key"></orderCard>
		</view>
	</view>
	<!-- end 我的订单 -->
</template>

<script>
	import orderCard from './components/orderCard.vue'
	export default {
		components:{
			orderCard
		},
		data() {
			return {
				current: 0,
				orderList: [1],
				list: [{
						name: '全部',
					},
					{
						name: '待付款'
					},
					{
						name: '待发货'
					},
					{
						name: '待收货'
					},
					{
						name: '已完成'
					},
				],
			}
		},
		onLoad(options) {
			if(options.status != null)
			{
				this.current = options.status
			}
		},
		methods: {
			// tabs通知swiper切换
			tabsChange(index) {
				this.current = index
			}
		}
	}
</script>

<style scoped lang="less">
	.no-order-data {
		display: flex;
		align-items: center;
		flex-flow: column;
	}

	.no-order-data-img {
		width: 400rpx;
		height: 400rpx;
	}
	
	.hint{
		font-weight: 400;
		color: #B1B1B1;
	}
	
</style>
