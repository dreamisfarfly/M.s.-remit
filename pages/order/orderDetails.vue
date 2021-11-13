<template>
	<view>
		<!-- start 订单状态 -->
		<view class="order-status interpose column">
			<view class="order-status-title">{{orderStatusName}}</view>
			<view class="order-status-hint">{{orderStatusInfo}}</view>
			<view class="order-status-schedule">
				<u-steps :list="numList"></u-steps>
			</view>
		</view>
		<!-- end 订单状态 -->
		<!-- start 选择地址 -->
		<view class="u-m-t-20">
			<selectAddress></selectAddress>
		</view>
		<!-- end 选择地址 -->
		<!-- start 展示商品信息 -->
		<view class="u-m-t-20">
			<goodsOrderCard class="u-m-t-20"></goodsOrderCard>
		</view>
		<!-- end 展示商品信息 -->
		<!-- start 订单信息展示 -->
		<view class="order-info u-m-t-20">
			<view class="order-info-label u-flex">
				订单编号：202109130001
				<view class="copy">复制</view>
			</view>
			<view class="order-info-label">
				下单时间：2021-09-25 13:25:26
			</view>
			<view class="order-info-label">
				买家留言：无
			</view>
			<view class="order-info-label">
				支付方式：微信支付
			</view>
			<view class="order-info-label">
				支付时间：2021-09-25 13:25:26
			</view>
			<view class="order-info-label">
				支付时间：2021-09-25 13:25:26
			</view>
			<view class="order-info-label">
				配送时间：2021-09-25
			</view>
			<view class="order-info-hint">可联系客服修改配送时间~</view>
		</view>
		<!-- end 订单信息展示 -->
		<!-- start 订单资金信息 -->
		<view class="u-m-t-20">
			<orderPriceInfo class="u-m-t-20"></orderPriceInfo>
		</view>
		<!-- end 订单资金信息 -->
	</view>
</template>

<script>
	import selectAddress from './components/selectAddress.vue'
	import goodsOrderCard from './components/goodsOrderCard.vue'
	import orderPriceInfo from './components/orderPriceInfo.vue'
	export default {
		components: {
			selectAddress,
			goodsOrderCard,
			orderPriceInfo
		},
		data() {
			return {
				status: 0,
				numList: [
					{
					    name: '买家付款'
				    }, 
					{
					    name: '商家发货'
				    }, 
					{
					    name: '买家收货'
				    }, 
					{
					    name: '交易完成'
				    }
				],
			}
		},
		computed: {
			//订单状态名称
			orderStatusName: function() {
				switch (this.status) {
					case 0:
						return '代付款'
					case 1:
						return '已关闭'
				}
			},
			//订单提示信息
			orderStatusInfo: function() {
				switch (this.status) {
					case 0:
						return '剩余22小时51分35秒内付款，否则订单将自动关闭'
					case 1:
						return '超时未付款（取消订单已取消）'
				}
			}
		},
		methods: {

		}
	}
</script>

<style scoped lang="less">
	.order-status {
		background: #FFFFFF;

		.order-status-title {
			padding-top: 50rpx;
			font-size: 36rpx;
			font-weight: 600;
			color: #1F2020;
		}

		.order-status-hint {
			padding-top: 10rpx;
			padding-bottom: 48rpx;
			font-size: 24rpx;
			font-weight: 500;
			color: #999999;
		}

		.order-status-schedule {
			width: 100%;
			padding: 0 74rpx;
			padding-bottom: 62rpx;
		}
	}

	.order-info {
		padding: 40rpx 30rpx;
		background-color: #FFFFFF;
	}

	.order-info-label {
		font-size: 28rpx;
		font-weight: 400;
		color: #1A1A1A;
		margin-bottom: 20rpx;

		.copy {
			margin-left: 20rpx;
			padding: 0 20rpx;
			border: 2rpx solid #434343;
			border-radius: 4rpx;
			font-size: 24rpx;
			color: #1A1A1A;
		}
	}

	.order-info-hint {
		font-size: 28rpx;
		font-weight: 400;
		color: #ED3632;
	}
</style>
