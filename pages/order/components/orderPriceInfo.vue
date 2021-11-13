<template>
	<!-- start 订单价格信息 -->
	<view class="order-fund-information build-content">
		<view class="both-sides-align order-fund-list">
			<text class="order-fund-title">商品金额</text>
			<text class="order-fund-price">¥99.00</text>
		</view>
		<view class="both-sides-align order-fund-list">
			<text class="order-fund-title">优惠金额</text>
			<text class="order-fund-price">-¥99.00</text>
		</view>
		<view class="both-sides-align order-fund-list">
			<text class="order-fund-title">运费</text>
			<text class="order-fund-price">+¥99.00</text>
		</view>
		<view class="separator"></view>
		<view class="both-sides-align total-view">
			<text class="order-fund-title">合计:</text>
			<text class="order-fund-price">+¥59.00</text>
		</view>
	</view>
	<!-- end 订单价格信息 -->
</template>

<script>
</script>

<style scoped lang="less">
	.order-fund-information{
		background-color: #FFFFFF;
	}
	
	.order-fund-list{
		padding: 14rpx 0;
		font-size: 28rpx;
	}
	
	.total-view{
		padding: 20rpx 0 40rpx 0;
	}
	
	.order-fund-title{
		font-weight: 400;
		color: #1A1A1A;
	}
	
	.order-fund-price{
		font-weight: 500;
		color: #ED3632;
	}
</style>
