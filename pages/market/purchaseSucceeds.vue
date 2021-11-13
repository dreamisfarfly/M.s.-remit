<template>
	<!-- start 购买成功 -->
	<view class="purchase-succeeds">
		<image class="order-status-image"
		   src="@/static/images/pay-success.png"></image>
		<view class="order-title">
			添加客服微信（<text>xeixinhao</text>），享受更多优惠~</view>
		<view class="view-order">查看订单</view>
	</view>
	<!-- end 购买成功 -->
</template>

<script>
	export default {
		data() {
			return {
				
			}
		},
		methods: {
			
		}
	}
</script>

<style scoped lang="less">
	.purchase-succeeds{
		display: flex;
		align-items: center;
		flex-direction: column;
		font-family: PingFangSC-Regular, PingFang SC;
		font-size: 24rpx;
		.order-status-image{
			margin-top: 100rpx;
			width: 360rpx;
			height: 360rpx;
		}
		.order-title{
			margin-top: 42rpx;
			font-size: 32rpx;
			font-weight: 550;
			color: #222222;
			line-height: 22px;
			text{
				color: #6282A2;
			}
		}
		.view-order{
			margin-top: 72rpx;
			padding: 10rpx 50rpx;
			background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
			border-radius: 4rpx;
			font-weight: 400;
			color: #FFFFFF;
			font-size: 24rpx;
		}
	}
	
</style>
