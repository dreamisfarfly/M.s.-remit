<template>
	<view class="u-m-t-36">
		<cardHeader title="案例展示"></cardHeader>
		<view class=" u-m-b-30">
			<!-- start 案例列表 -->
			<view class="u-m-b-30" v-for="(item,key) in 6" :key="key" @tap="util.jump('/pages/build/caseDetails')">
				<view class="img-show">
					<image
						src="https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fpic171.nipic.com%2Ffile%2F20180703%2F24206353_174723647000_2.jpg&refer=http%3A%2F%2Fpic171.nipic.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1639041954&t=095b6754f7a384871d129e9241a73221">
					</image>
					<view class="case-status">已完工</view>
				</view>
				<view class="show-info">
					<view class="show-info-title">长云时代165平现代简约长云时代165平现代简约风长云时代</view>
					<view class="show-info-content">
						<view class="case-info">
							<image class="case-buddha"
								src="https://img1.baidu.com/it/u=3399523585,3683536664&fm=15&fmt=auto"></image>
							<text class="case-name">黄伟</text>
						</view>
						<view class="view-details">查看详情</view>
					</view>
				</view>
			</view>
			<!-- end 案例列表 -->
		</view>
	</view>
</template>

<script>
	export default {
		name: "caseShow",
		data() {
			return {

			};
		},
		methods: {

		}
	}
</script>

<style scoped lang="less">
	.img-show {
		width: 100%;
		height: 360rpx;
		position: relative;

		image {
			width: 100%;
			height: 100%;
			border-radius: 10rpx 10rpx 0 0;
			flex-shrink: 0;
		}

		.case-status {
			position: absolute;
			top: 0rpx;
			left: 0rpx;
			padding: 4rpx 22rpx;
			background: rgba(0, 0, 0, 0.6);
			border-radius: 10rpx 0 10rpx 0;
			font-size: 22rpx;
			font-weight: 400;
			color: #FFFFFF;
			opacity: 0.6;
		}
	}

	.show-info {
		padding: 0 16rpx;
		box-sizing: border-box;
		background-color: #FFFFFF;

		.show-info-title {
			margin-top: 12rpx;
			font-size: 28rpx;
			font-weight: 550;
			color: #1A1A1A;
			width: 100%;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
			border-radius: 0 10rpx 10rpx 0;
		}

		.show-info-content {
			display: flex;
			justify-content: space-between;
			padding: 20rpx 0;

			.case-info {
				display: flex;
				align-items: center;

				.case-buddha {
					width: 48rpx;
					height: 48rpx;
					border-radius: 50% 50%;
				}

				.case-name {
					margin-left: 20rpx;
					font-size: 26rpx;
					font-weight: 400;
					color: #4C4C4C;
				}
			}

			.view-details {
				padding: 8rpx 30rpx;
				border-radius: 24rpx;
				border: 2rpx solid #1A1A1A;
				box-sizing: border-box;
				font-size: 22rpx;
				font-weight: 400;
				color: #1A1A1A;
			}
		}
	}
</style>
