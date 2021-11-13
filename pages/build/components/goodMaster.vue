<template>
	<!-- start 优秀工长 -->
	<view class="goods-master">
		<cardHeader title="优秀工长"></cardHeader>
		<scroll-view scroll-x="true" class="scroll-view_H">
			<view class="overman-card-list" v-for="(item,key) in 5" :key="key">
				<image class="overman-card-img" src="@/static/logo.png"></image>
				<view class="overman-card-title">打工人</view>
				<view class="overman-card-details">从业15年 | 56工地</view>
			</view>
		</scroll-view>	
	</view>
	<!-- end 优秀工长 -->
</template>

<script>
	
</script>

<style scoped lang="less">
	.overman-card-list{
		width: 200rpx;
		display: inline-flex;
		flex-flow: column;
		align-items: center;
		margin-right: 34rpx;
		font-family: PingFangSC-Regular, PingFang SC;
		.overman-card-img{
			width: 140rpx;
			height: 140rpx;
			border-radius: 50% 50%;
		}
		.overman-card-title{
			margin-top: 28rpx;
			color: #1A1A1A;
			font-size: 28rpx;
			font-weight: 400;
			width: 100%;
			text-align: center;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
		.overman-card-details{
			font-size: 22rpx;
			font-weight: 400;
			color: #666666;
			width: 100%;
			text-align: center;
		    overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
	}
	
	.scroll-view_H{
		overflow: hidden;
		white-space: nowrap;
		width: 100%;
	}  
</style>
