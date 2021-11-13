<template>
	<!-- start 确认订单 -->
	<view class="confirm-order">
		<!-- start 选择地址 -->
		<selectAddress></selectAddress>
		<!-- end 选择地址 -->
		<view class="u-m-t-20">
			<goodsOrderCard></goodsOrderCard>
		</view>	
		<!-- start 规格信息 -->
		<view class="both-sides-align specification">
			<text class="specification-label">运费及包装</text>
			<text class="specification-val">包配包安装</text>
		</view>
		<!-- end 规格信息 -->
		<!-- start 配送时间 -->
		<view class="both-sides-align specification">
			<text class="specification-label">配送时间</text>
			<text class="specification-val">请选择送货时间</text>
		</view>
		<!-- end 配送时间 -->
		<!-- start 买家留言 -->
		<view class="specification center-horizontally ">
			<text class="specification-label">买家留言</text>
			<input class="message m-l-20" type="text" placeholder="留言建议提前协商 (50字以内)"/>
		</view>
		<!-- end 买家留言 -->
		<!-- start 订单资金信息 -->
		<view class="u-m-t-20">
			<orderPriceInfo></orderPriceInfo>
		</view>
		<!-- end 订单资金信息 -->
		<view class="operation-order menu-location both-sides-align center-horizontally">
			<view class="operation-order-info">
				合计：
				<text>¥59.00</text>
			</view>
			<view class="center-horizontally">
				<view class="wx-pay operating-button" @click="wxPay()">微信支付</view>
			</view>		
		</view>
	</view>
	<!-- end 确认订单 -->
</template>

<script>
	import selectAddress from './components/selectAddress.vue'
	import goodsOrderCard from './components/goodsOrderCard.vue'
	import orderPriceInfo from './components/orderPriceInfo.vue'
	export default {
		components:{
			selectAddress,
			goodsOrderCard,
			orderPriceInfo
		},
		data() {
			return {
				
			};
		},
		methods: {
			//微信支付
			wxPay() {
				this.util.jump('/pages/market/purchaseSucceeds');
			}
		}
	}
</script>

<style scoped lang="less">
	.message{
		flex: 1;
		font-size: 28rpx;
		font-weight: 400;
		color: #999999;
	}
	
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
	
	.operation-order{
		background-color: #FFFFFF;
		.operation-order-info{
			font-size: 28rpx;
			font-weight: 500;
			color: #1A1A1A;
			text{
				margin-left: 20rpx;
				color: #ED3632;
			}
		}
		.wx-pay{			
			background: linear-gradient(62deg, #1F2020 0%, #444444 100%);			
			color: #FFFFFF;
		}
		
		.cancel{
			color: #4C4C4C;
			border: 2rpx solid #979797;
			box-sizing: border-box;
			padding: 9rpx 24rpx!important;
		}
		
		.operating-button{
			padding: 10rpx 24rpx;
			border-radius: 4rpx;
			font-size: 24rpx;
		}
	}
	
	.menu-location{
		width: 100%;
		background: #FFFFFF;
		padding: 28rpx 30rpx;
	}
</style>
