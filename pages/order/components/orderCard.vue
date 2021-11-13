<template>
	<!-- start 订单卡片 -->
	<view class="order-card" @tap="util.jump('/pages/order/orderDetails')">
		<view class="order-card-header">
			<text class="order-id">订单编号：20210913001</text>
			<text class="order-status">待付款</text>
		</view>
		<view class="order-card-content">
			<image class="goods-img" :src="img"></image>
			<view class="order-info">
				<view class="goods-title">
					大雁展翅般优美的曲线给客厅一抹动人的微笑以“轻设计”、“轻女性的啊
				</view>
				<view class="goods-specification">商品规格</view>
				<view class="data-info">
					<text class="goods-price">¥35.00</text>
					<text class="order-count">x1</text>
				</view>
			</view>
		</view>
		<view class="order-card-footer">
			<view class="total-view">
				合计：
				<text class="total-price">¥35.00</text>
			</view>
			<view class="operating-button" v-if="index==0">立即付款 23:59:50</view>
			<view class="operating-button" v-if="index==1">查看订单</view>
		</view>
	</view>
	<!-- end 订单卡片 -->
</template>

<script>
	export default {
		data() {
			return {
				index:0,
				img: 'https://img2.baidu.com/it/u=1519358925,3330107491&fm=26&fmt=auto',
			}
		},
	}
</script>

<style scoped lang="less">
	.order-card{
		margin-bottom: 20rpx;
		padding: 0 30rpx;
		background-color: #FFFFFF;
		.order-card-header{
			display: flex;
			padding: 26rpx 0;
			align-items: center;
			justify-content: space-between;
			font-weight: 400;
			.order-id{
				font-size: 28rpx;
				color: #444444;
			}
			.order-status{
				font-size: 24rpx;
				color: #ED3632;
			}
		}
		.order-card-content{
			padding-top: 36rpx;
			padding-bottom: 30rpx;
			box-sizing: border-box;
			border-top: 1rpx solid rgba(0, 0, 0, 0.08);
			border-bottom: 1rpx solid rgba(0, 0, 0, 0.08);
			display: flex;
			.goods-img{
				flex-shrink: 0;
				width: 200rpx;
				height: 200rpx;
			}
			.order-info{
				margin-left: 30rpx;
				.goods-title{
					font-size: 28rpx;
					font-weight: 550;
					color: #1A1A1A;	
					display: -webkit-box;
					-webkit-box-orient: vertical;
					-webkit-line-clamp: 2;
					overflow: hidden;
					word-break: break-all;
					line-height: 52rpx;
				}
				.goods-specification{
					margin-top: 14rpx;
					font-size: 24rpx;
					font-weight: 400;
					color: #7C7C7C;					
                    line-height: 34rpx;
				}
				.data-info{
					margin-top: 4rpx;
					display: flex;
					align-items: center;
					justify-content: space-between;
					font-size: 28rpx;
					.goods-price{					
						font-weight: 500;
						color: #ED3632;
					}
					.order-count{
						color: #7C7C7C;
					}
				}
			}
		}
		.order-card-footer{
			padding-top: 28rpx;
			padding-bottom: 40rpx;
			display: flex;
			align-items: center;
			justify-content: space-between;
			.total-view{
				font-size: 28rpx;
				color: #4C4C4C;
				.total-price{
					font-size: 32rpx;
					font-weight: 500;
					color: #ED3632;
				}
			}
			.operating-button{
				padding: 18rpx 28rpx;
				background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
				border-radius: 28rpx;
				font-size: 24rpx;
				color: #FFFFFF;
			}
		}
	}
</style>
