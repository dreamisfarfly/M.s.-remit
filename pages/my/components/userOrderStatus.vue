<template>
	<view class="user-order-status">
		<view class="user-order-status-list" 
		  v-for="(item,key) in orderStatusList" :key="key"
		  @tap="util.jump(item.url)">
			<image class="order-icon" :src="item.icon"></image>
			<view class="order-icon-title">{{item.title}}</view>
			<view 
			class="order-number" 
			v-if="null != item.name && item.name=='obligation' && obligation != null">
			   {{obligation}}
			</view>
			<view
			class="order-number" 
			v-if="null != item.name && item.name=='sendGoods' && sendGoods != null">
			   {{sendGoods}}
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				//订单状态
				orderStatusList: [{
					icon: require('@/static/images/pay-order-icon.png'),
					title: '待付款',
					name: 'obligation',
					url: '/pages/order/myOrder?status=1'
				}, {
					icon: require('@/static/images/send-order-icon.png'),
					title: '待发货',
					name: 'sendGoods',
					url: '/pages/order/myOrder?status=2'
				}, {
					icon: require('@/static/images/receive-order-icon.png'),
					title: '待收货',
					url: '/pages/order/myOrder?status=3'
				}, {
					icon: require('@/static/images/sell-order-icon.png'),
					title: '已完成',
					url: '/pages/order/myOrder?status=4'
				}, {
					icon: require('@/static/images/orde-order-icon.png'),
					title: '我的订单',
					url: '/pages/order/myOrder?status=0'
				}, ],
				//代付款订单个数
				obligation: null,
				//代发货个数
				sendGoods: null
			}
		},
		methods:{
		
		}
	}
</script>

<style scoped lang="less">
	.user-order-status {
		width: 100%;
		background: #FFFFFF;
		padding: 24rpx 0;
		display: flex;
		font-family: PingFangSC-Regular, PingFang SC;

		.user-order-status-list {
			width: 20%;
			display: flex;
			flex-flow: column;
			align-items: center;
			padding-top: 26rpx;
			position: relative;

			.order-icon {
				width: 54rpx;
				height: 54rpx;
			}

			.order-icon-title {
				margin-top: 12rpx;
				font-size: 24rpx;
				font-weight: 400;
				color: #999999;
				line-height: 34rpx;
			}

			.order-number {
				position: absolute;
				top: 2rpx;
				right: 20rpx;
				color: #FFFFFF;
				font-weight: 500;
				font-size: 22rpx;
				min-width: 16rpx;
				height: 40rpx;
				line-height: 40rpx;
				padding: 0 12rpx;
				font-weight: normal;
				text-align: center;
				background: #e23442;
				border-radius: 22rpx;
			}
		}
	}
</style>
