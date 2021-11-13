<template>
	<!-- start 商品订单卡片 -->
	<view class="goods-order-card flex">
		<image class="goods-img" :src="img"></image>
		<view class="goods-info">
			<view class="goods-title">
				大雁展翅般优美的曲线给客厅一抹动人的微笑以“轻设计”、“轻女性的啊
			</view>
			<view class="price-view both-sides-align center-horizontally">
				<text class="price">¥35.00</text>
				<text class="count">x1</text>
			</view>
		</view>
	</view>
	<!-- end 商品订单卡片 -->
</template>

<script>
	export default {
		data() {
			return {
				img: 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fwww.2008php.com%2F09_Website_appreciate%2F10-07-11%2F1278861720_g.jpg&refer=http%3A%2F%2Fwww.2008php.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1639302882&t=75f85794eb26c8404c387ed8d4c5af10',
			}
		}
	}
</script>

<style scoped lang="less">
	.goods-order-card{
		padding: 30rpx 30rpx;
		background-color: #FFFFFF;
		.goods-img{
			width: 200rpx;
			height: 200rpx;
			flex-shrink: 0;
			border-radius: 10rpx 10rpx;
		}
		.goods-info{
			margin-left: 30rpx;
			.goods-title{
				font-size: 28rpx;
				font-weight: 500;
				color: #1A1A1A;
				line-height: 52rpx;
				display: -webkit-box;
				-webkit-box-orient: vertical;
				-webkit-line-clamp: 2;
				overflow: hidden;
				word-break: break-all;
			}
			.price-view{
				margin-top: 58rpx;
				.price{
					font-size: 32rpx;
					font-weight: 500;
					color: #ED3632;
				}
				.count{
					font-size: 28rpx;
					font-weight: 400;
					color: #7C7C7C;
				}
			}
		}
	}
</style>
