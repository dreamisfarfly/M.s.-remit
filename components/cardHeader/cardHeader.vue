<template>
	<view class="exhibition-card-header">
		<view class="title-info">
			<image class="exhibition-card-img" src="@/static/images/show-icon.png"></image>
			<text class="exhibition-card-title">{{title}}</text>
		</view>
		<view class="skip-view" v-if="skipUrl != ''" @tap="util.jump(skipUrl)">
			<text class="view-more">查看更多</text>
			<image class="skip-icon" src="@/static/images/right-icon.png"></image>
		</view>
	</view>
</template>

<script>
	export default {
		name: "cardHeader",
		props:{
			title:{
				type: String,
				default: ''
			},
			skipUrl:{
				type: String,
				default: ''
			}
		},
		data() {
			return {

			};
		},
		methods:{

		}
	}
</script>

<style scoped lang="less">
	.exhibition-card-header {
		padding: 28rpx 0;
		display: flex;
		justify-content: space-between;
		.title-info {
			display: flex;
			align-items: center;

			.exhibition-card-img {
				width: 34rpx;
				height: 34rpx;
			}

			.exhibition-card-title {
				margin-left: 20rpx;
				font-size: 30rpx;
				font-weight: 600;
				color: #1A1A1A;
			}
		}

		.skip-view {
			display: flex;
			align-items: center;

			.view-more {
				font-size: 24rpx;
				font-weight: 400;
				color: #4C4C4C;
			}

			.skip-icon {
				margin-left: 10rpx;
				width: 24rpx;
				height: 26rpx;
			}
		}
	}
</style>
