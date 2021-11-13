<template>
	<!-- start 团购卡片 -->
	<view class="group-purchase-card">
		<image class="recent-deals-img" src="@/static/logo.png"></image>
		<view class="recent-deals-info">
			<view class="recent-deals-title">法国造梦者32条金属线编织蝴蝶梦境</view>
			<view class="recent-deals-price">￥299.00</view>
			<view class="recent-deals-original-price">原价：¥599.00</view>
			<view class="go-group">去拼团</view>
		</view>
	</view>
	<!-- start 团购卡片 -->
</template>

<script>
	
</script>

<style scoped lang="less">
	.group-purchase-card{
		padding: 24rpx 24rpx;
		box-sizing: border-box;
		background: #FFFFFF;
		display: flex;
		white-space: normal;
		.recent-deals-img{
			width: 216rpx;
			height: 216rpx;
			border-radius: 8rpx;
			flex-shrink:0;
		}
		.recent-deals-info{
			margin-left: 24rpx;
			position: relative;
			.recent-deals-title{
				font-size: 28rpx;
			    font-weight: 550;
				color: #444444;
				line-height: 20px;
				text-overflow: -o-ellipsis-lastline;
				overflow: hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 2;
				line-clamp: 2;
				-webkit-box-orient: vertical;
			}
			.recent-deals-price{
				margin-top: 24rpx;
				font-size: 36rpx;
				font-weight: 500;
				color: #ED3632;
				line-height: 50rpx;
			}
			.recent-deals-original-price{
				margin-top: 10rpx;
				font-size: 24rpx;
				font-weight: 400;
				color: #999999;
				line-height: 34rpx;
				text-decoration:line-through;
			}
			.go-group{
				position: absolute;
				right: 0rpx;
				bottom: 26rpx;
				padding: 10rpx 22rpx;
				background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
				border-radius: 4rpx;
				font-size: 24rpx;
				font-weight: 400;
				color: #FFFFFF;
			}
		}
	}
</style>
