<template>
	<view class="group-goods-info flex">
		<view class="left-bak"></view>
		<view class="right-bak"></view>
		<view class="group-goods-info-view">
			<view class="goods-info">
				<view class="price">￥299.00</view>
				<view class="original-cost">原价：¥599.00</view>
				<view class="center-horizontally u-m-t-12">
					<view class="group-label">拼团活动</view>
					<text class="group-hint">2人成团，限购一件</text>
				</view>
			</view>
			<view class="goods-time interpose column">
				<view class="count-down">72:53:25</view>
				<view class="activity-hint">距离活动结束</view>
			</view>
		</view>
	</view>
</template>

<script>
</script>

<style scoped lang="less">
	.group-goods-info{
		margin-bottom: 20rpx;
		position: relative;
		height: 184rpx;
		.left-bak{
			width: 290rpx;
			background-color: #FFFFFF;
		}
		.right-bak{
			flex: 1;
			background: linear-gradient(90deg, rgba(198, 135, 4, 0) 0%, #C68704 100%);
		}
		.group-goods-info-view{
			top: 0;
			position: absolute;
			width: 100%;
			height: 100%;
			display: flex;
			.goods-info{
				flex: 1;
				padding-left: 50rpx;
				.price{
					padding-top: 26rpx;
					font-size: 36rpx;
					font-weight: 500;
					color: #ED3632;
				}
				.original-cost{
					margin-top: 10rpx;
					font-size: 24rpx;
					color: #999999;
				}
				.group-label{
					padding: 2rpx 10rpx;
					color: #4C4C4C;
					font-size: 22rpx;
					border-radius: 4rpx;
					border: 2rpx solid #4C4C4C;
				}
				.group-hint{
					margin-left: 20rpx;
					font-size: 24rpx;
					color: #4C4C4C;
				}
			}
			.goods-time{
				flex: 1;
				.count-down{
					font-size: 48rpx;
					font-weight: 500;
					color: #FFFFFF;
				}
				.activity-hint{
					margin-top: 16rpx;
					font-size: 24rpx;
					color: #FFFFFF;
				}
			}
		}
	}
	
</style>
