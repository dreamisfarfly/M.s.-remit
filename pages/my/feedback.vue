<template>
	<!--  start 意见反馈 -->
	<view class="build-content feedback">
		<!-- start 反馈类别 -->
		<view class="feedback-card">
			<view class="feedback-card-title">反馈类别</view>
			<view class="feedback-card-content flex type-content-top-mar">
				<view class="type-btn" :class="[key!=0?'mar-left':'',index==key?'select-style':'']"
					v-for="(item,key) in feedbackTypeList" :key="key" @click="selectType(key)">{{item.label}}</view>
			</view>
		</view>
		<!-- end 反馈类别 -->
		<!-- start 反馈内容 -->
		<view class="feedback-card content-top-mar">
			<view class="feedback-card-title">反馈内容</view>
			<view class="feedback-card-content textarea-content">
				<textarea placeholder="请填写15字以上描述，以便我们更好地为您提供帮助~"></textarea>
			</view>
		</view>
		<!-- end 反馈内容 -->
		<!-- start 上传内容 -->
		<view class="image-card">
			<view class="upload-view interpose">
				<image class="add-icon" src="@/static/images/add-icon.png"></image>
			</view>
			<view class="hint settle-down">
				<text class="hint-font">最多上传9张</text>
			</view>
		</view>
		<!-- end 上传内容 -->
		<!-- start 联系方式 -->
		<view class="feedback-card content-top-mar">
			<view class="feedback-card-title">联系方式</view>
			<view class="feedback-card-content contact">
				<input class="contact-input" type="text" placeholder="请留下您的邮箱或者电话，方便我们联系您哦~" />
			</view>
		</view>
		<!-- end 联系方式 -->
		<view class="submit-feedback interpose">提交反馈</view>
	</view>
	<!--  end 意见反馈 -->
</template>

<script>
	export default {
		data() {
			return {
				//反馈类型
				feedbackTypeList: [{
						val: 0,
						label: 'BUG'
					},
					{
						val: 1,
						label: '建议'
					},
					{
						val: 2,
						label: '吐槽'
					}
				],
				//选中类型
				index: 0
			}
		},
		methods: {
			//选中类型
			selectType(key) {
				this.index = key
			}
		}
	}
</script>

<style scoped lang="less">
	.feedback {
		padding-top: 38rpx;
	}

	.feedback-card {
		.feedback-card-title {
			font-size: 32rpx;
			font-weight: 550;
			color: #222222;
		}

		.type-btn {
			padding: 10rpx 50rpx;
			font-size: 28rpx;
			border: 2rpx solid #434343;
			color: #4C4C4C;
		}

		.mar-left {
			margin-left: 60rpx;
		}

		.select-style {
			background: rgba(0, 0, 0, 0.05);
			color: #1A1A1A;
			border: 2rpx solid #434343;
		}
	}

	.type-content-top-mar {
		margin-top: 38rpx;
	}

	.content-top-mar {
		margin-top: 60rpx;
	}

	.textarea-content {
		margin-top: 24rpx;
		width: 100%;
		height: 212rpx;

		textarea {
			width: 100%;
			height: 100%;
			font-size: 28rpx;
			color: #B1B1B1;
			line-height: 40rpx;
		}
	}

	.contact {
		margin-top: 20rpx;
	}

	.contact-input {
		font-size: 28rpx;
		color: #B1B1B1;
		line-height: 40rpx;
	}

	.image-card {
		margin-top: 20rpx;
		margin-bottom: 60rpx;
		display: flex;
	}

	.upload-view {
		width: 168rpx;
		height: 168rpx;
		background: #ECECEC;
		border-radius: 10rpx;
	}

	.add-icon {
		width: 56rpx;
		height: 56rpx;
	}

	.hint {
		margin-left: 40rpx;
		font-size: 28rpx;
		font-weight: 400;
		color: #B1B1B1;
	}
	
	.submit-feedback{
		margin-top: 160rpx;
		color: #FFFFFF;
		height: 88rpx;
		font-size: 28rpx;
		background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
	}
</style>
