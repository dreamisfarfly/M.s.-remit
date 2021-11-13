<template>
	<!-- start 设计作品卡片 -->
	<view class="design-card" @tap="util.jump('/pages/design/workDetails')">
		<view class="design-img-view">
			<image class="design-img" :src="img"></image>
			<view class="design-label">现代简约</view>
		</view>
		<view class="design-img-content">
			<view class="design-title">
				大雁展翅般优美的曲线 给客厅一抹动人的微笑
			</view>
			<view class="design-info">
				<view class="user-info">
					<image class="user-img" :src="img1"></image>
					<text class="hint-font">虎妹</text>
				</view>
				<view class="browse-info">
					<image class="browse-img" src="@/static/images/browse-number-icon.png"></image>
					<text class="hint-font">123</text>
				</view>
			</view>
		</view>
	</view>
	<!-- end 设计作品卡片 -->
</template>

<script>
	export default {
		name:"designCard",
		data() {
			return {
				img:'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fhbimg.b0.upaiyun.com%2F48124ed00ae163228d4e65acf0d54c5cc5a2f31a2e142-PaXGuD_fw658&refer=http%3A%2F%2Fhbimg.b0.upaiyun.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1639123061&t=20f270d264a6d950ec7ffb31ab031622',
			    img1:'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fc-ssl.duitang.com%2Fuploads%2Fitem%2F202007%2F22%2F20200722004645_Ur3a8.jpeg&refer=http%3A%2F%2Fc-ssl.duitang.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1639124002&t=83d502530f35bffc7f401d9cd2ca6512',
			};
		}
	}
</script>

<style scoped lang="less">
	.design-card{
		width: 334rpx;
		margin-bottom: 20rpx;
		font-family: PingFangSC-Regular, PingFang SC;
		.design-img-view{
			height: 250rpx;
			position: relative;
			.design-img{
				width: 100%;
				height: 100%;
				border-radius: 10rpx 10rpx 0 0;
			}
			.design-label{
				top: 0;
				left: 0;
				position: absolute;
				padding: 4rpx 10rpx;
				background: rgba(0, 0, 0, 0.6);
				border-radius: 10rpx 0 10rpx 0;
				font-weight: 400;
				color: #FFFFFF;
				font-size: 22rpx;
				opacity: 0.6;
			}
		}
		.design-img-content{
			padding: 0 16rpx;
			background-color: #FFFFFF;
			border-radius: 0 0 10rpx 10rpx;
			.design-title{
				margin-top: 20rpx;
				font-size: 28rpx;
				font-weight: 550;
				color: #1A1A1A;
				line-height: 40rpx;
			}
			.design-info{
				display: flex;
				justify-content: space-between;
				padding-top: 16rpx;
				padding-bottom: 20rpx;
				.user-info{
					display: flex;
					align-items: center;
					.user-img{
						width: 40rpx;
						height: 40rpx;
						border-radius: 50% 50%;
					}
				}
				.browse-info{
					display: flex;
					align-items: center;
					.browse-img{
						width: 24rpx;
						height: 24rpx;
					}
				}
				.hint-font{
					margin-left: 10rpx;
					font-size: 24rpx;
					font-weight: 400;
					color: #4C4C4C;
				}
			}
		}
	}
</style>
