(function(root, client)
{
	if (typeof define === 'function' && define.amd)
	{
		define(
			['popsicle'], client)
	}
	else if (typeof exports === 'object')
	{
		module.exports = client(require('popsicle'))
	}
	else
	{
		root.PivotalTracker = client(root.popsicle)
	}
})(this, function(popsicle)
	{
		var TEMPLATE_REGEXP = /\{([^\{\}]+)\}/g

		/**
		 * @param  {String} string
		 * @param  {Object} interpolate
		 * @param  {Object} defaults
		 * @return {String}
		 */
		function template(string, interpolate, defaults)
		{
			defaults = defaults || { }
			interpolate = interpolate || { }

			return string.replace(TEMPLATE_REGEXP, function(match, key)
				{
					if (interpolate[key] != null)
					{
						return encodeURIComponent(interpolate[key])
					}

					if (defaults[key] != null)
					{
						return encodeURIComponent(defaults[key])
					}

					return ''
				})
		}

		/**
		 * @param  {Object} dest
		 * @param  {Object} ...source
		 * @return {Object}
		 */
		function extend(dest /*, ...source */)
		{
			for (var i = 1; i < arguments.length; i++)
			{
				for (var key in arguments[i])
				{
					dest[key] = arguments[i][key]
				}
			}

			return dest
		}

		function handleRequest(client, path, method, body, options)
		{
			options = extend({ }, client.options, options)

			var baseUri = template(options.baseUri, options.baseUriParameters)
			var hasBody = method !== 'GET' && method !== 'HEAD'
			var reqOpts = { }

			var reqBody = hasBody && body != null ? body : options.body
			var reqQuery = !hasBody && body != null ? body : options.query

			var reqOpts = {
				url: baseUri.replace(/\/$/, '') + path,
				method: method,
				headers: extend({ }, options.headers),
				body: reqBody,
				query: typeof reqQuery === 'object' ? extend({ }, reqQuery) : reqQuery
			}

			if (options.user && typeof options.user.sign === 'function')
			{
				options.user.sign(reqOpts)
			}

			return client.request(reqOpts)
		}

		function Resource0(uri, client)
		{
			this._uri = uri
			this._client = client

			this.me = new Resource1(uri + '/me', client)
			this.my = new Resource2(uri + '/my', client)
			this.people = new Resource9(uri + '/people', client)
			this.projects = new Resource14(uri + '/projects', client)
			this.accounts = new Resource55(uri + '/accounts', client)
			this.stories = new Resource59(uri + '/stories', client)
			this.epics = new Resource62(uri + '/epics', client)
			this.fileAttachments = new Resource64(uri + '/file_attachments', client)
			this.googleAttachments = new Resource67(uri + '/google_attachments', client)
			this.sourceCommits = new Resource68(uri + '/source_commits', client)
			this.aggregator = new Resource69(uri + '/aggregator', client)
		}

		function Resource1(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource1.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource2(uri, client)
		{
			this._uri = uri
			this._client = client

			this.notifications = new Resource3(uri + '/notifications', client)
			this.activity = new Resource6(uri + '/activity', client)
			this.workspaces = new Resource7(uri + '/workspaces', client)
		}

		function Resource3(uri, client)
		{
			this._uri = uri
			this._client = client

			this.markRead = new Resource4(uri + '/mark_read', client)
		}

		Resource3.prototype.notificationId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource5(uri, this._client)
		}

		Resource3.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource4(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource4.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource5(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource5.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource5.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource6(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource6.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource7(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource7.prototype.workspaceId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource8(uri, this._client)
		}

		Resource7.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource7.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource8(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource8.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource8.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource8.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource9(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource9.prototype.personId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource10(uri, this._client)
		}

		function Resource10(uri, client)
		{
			this._uri = uri
			this._client = client

			this.notifications = new Resource11(uri + '/notifications', client)
		}

		function Resource11(uri, client)
		{
			this._uri = uri
			this._client = client

			this.since = new Resource12(uri + '/since', client)
		}

		function Resource12(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource12.prototype.timestamp = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource13(uri, this._client)
		}

		function Resource13(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource13.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource14(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource14.prototype.projectId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource15(uri, this._client)
		}

		Resource14.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource14.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource15(uri, client)
		{
			this._uri = uri
			this._client = client

			this.iterations = new Resource16(uri + '/iterations', client)
			this.integrations = new Resource17(uri + '/integrations', client)
			this.iterationOverrides = new Resource20(uri + '/iteration_overrides', client)
			this.memberships = new Resource22(uri + '/memberships', client)
			this.labels = new Resource24(uri + '/labels', client)
			this.stories = new Resource26(uri + '/stories', client)
			this.epics = new Resource41(uri + '/epics', client)
			this.uploads = new Resource46(uri + '/uploads', client)
			this.search = new Resource47(uri + '/search', client)
			this.my = new Resource48(uri + '/my', client)
			this.activity = new Resource51(uri + '/activity', client)
			this.export = new Resource52(uri + '/export', client)
			this.webhooks = new Resource53(uri + '/webhooks', client)
		}

		Resource15.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource15.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource15.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource16(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource16.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource17(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource17.prototype.integrationId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource18(uri, this._client)
		}

		Resource17.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource17.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource18(uri, client)
		{
			this._uri = uri
			this._client = client

			this.stories = new Resource19(uri + '/stories', client)
		}

		Resource18.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource18.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource18.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource19(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource19.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource20(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource20.prototype.iterationNumber = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource21(uri, this._client)
		}

		function Resource21(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource21.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource22(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource22.prototype.membershipId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource23(uri, this._client)
		}

		Resource22.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource22.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource23(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource23.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource23.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		Resource23.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		function Resource24(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource24.prototype.labelId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource25(uri, this._client)
		}

		Resource24.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource24.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource25(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource25.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource25.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource25.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource26(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource26.prototype.storyId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource27(uri, this._client)
		}

		Resource26.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource26.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource27(uri, client)
		{
			this._uri = uri
			this._client = client

			this.tasks = new Resource28(uri + '/tasks', client)
			this.labels = new Resource30(uri + '/labels', client)
			this.owners = new Resource32(uri + '/owners', client)
			this.comments = new Resource34(uri + '/comments', client)
			this.activity = new Resource40(uri + '/activity', client)
		}

		Resource27.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource27.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource27.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource28(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource28.prototype.taskId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource29(uri, this._client)
		}

		Resource28.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource28.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource29(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource29.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource29.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource29.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource30(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource30.prototype.labelId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource31(uri, this._client)
		}

		Resource30.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource30.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource31(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource31.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		function Resource32(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource32.prototype.personId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource33(uri, this._client)
		}

		Resource32.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource32.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource33(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource33.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		function Resource34(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource34.prototype.commentId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource35(uri, this._client)
		}

		Resource34.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource34.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource35(uri, client)
		{
			this._uri = uri
			this._client = client

			this.googleAttachments = new Resource36(uri + '/google_attachments', client)
			this.fileAttachments = new Resource38(uri + '/file_attachments', client)
		}

		Resource35.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource35.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource35.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource36(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource36.prototype.googleAttachmentId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource37(uri, this._client)
		}

		function Resource37(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource37.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		function Resource38(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource38.prototype.fileAttachmentId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource39(uri, this._client)
		}

		function Resource39(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource39.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		function Resource40(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource40.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource41(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource41.prototype.epicId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource42(uri, this._client)
		}

		Resource41.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource41.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource42(uri, client)
		{
			this._uri = uri
			this._client = client

			this.activity = new Resource43(uri + '/activity', client)
			this.comments = new Resource44(uri + '/comments', client)
		}

		Resource42.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource42.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource42.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource43(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource43.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource44(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource44.prototype.commentId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource45(uri, this._client)
		}

		Resource44.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource44.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource45(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource45.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource45.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource45.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource46(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource46.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource47(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource47.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource48(uri, client)
		{
			this._uri = uri
			this._client = client

			this.searches = new Resource49(uri + '/searches', client)
		}

		function Resource49(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource49.prototype.searchId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource50(uri, this._client)
		}

		Resource49.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource49.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource50(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource50.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		function Resource51(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource51.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource52(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource52.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource53(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource53.prototype.webhookId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource54(uri, this._client)
		}

		Resource53.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource53.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource54(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource54.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource54.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource54.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource55(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource55.prototype.accountId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource56(uri, this._client)
		}

		Resource55.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource56(uri, client)
		{
			this._uri = uri
			this._client = client

			this.memberships = new Resource57(uri + '/memberships', client)
		}

		Resource56.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource57(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource57.prototype.personId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource58(uri, this._client)
		}

		Resource57.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource57.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource58(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource58.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource58.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource58.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource59(uri, client)
		{
			this._uri = uri
			this._client = client

			this.export = new Resource61(uri + '/export', client)
		}

		Resource59.prototype.storyId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource60(uri, this._client)
		}

		function Resource60(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource60.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		Resource60.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		Resource60.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		function Resource61(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource61.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource62(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource62.prototype.epicId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource63(uri, this._client)
		}

		function Resource63(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource63.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource64(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource64.prototype.fileAttachmentId = function(/* ...args */)
		{
			var uri = this._uri + template('/{0}', arguments,
					[undefined])

			return new Resource65(uri, this._client)
		}

		function Resource65(uri, client)
		{
			this._uri = uri
			this._client = client

			this.download = new Resource66(uri + '/download', client)
		}

		function Resource66(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource66.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource67(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource67.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		function Resource68(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource68.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		function Resource69(uri, client)
		{
			this._uri = uri
			this._client = client

		}

		Resource69.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}

		function CustomResource(uri, client)
		{
			this._uri = uri
			this._client = client
		}

		CustomResource.prototype.get = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'GET', body, options)
		}
		CustomResource.prototype.post = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'POST', body, options)
		}
		CustomResource.prototype.put = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PUT', body, options)
		}
		CustomResource.prototype.head = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'HEAD', body, options)
		}
		CustomResource.prototype.delete = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'DELETE', body, options)
		}
		CustomResource.prototype.options = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'OPTIONS', body, options)
		}
		CustomResource.prototype.trace = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'TRACE', body, options)
		}
		CustomResource.prototype.copy = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'COPY', body, options)
		}
		CustomResource.prototype.lock = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'LOCK', body, options)
		}
		CustomResource.prototype.mkcol = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'MKCOL', body, options)
		}
		CustomResource.prototype.move = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'MOVE', body, options)
		}
		CustomResource.prototype.purge = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PURGE', body, options)
		}
		CustomResource.prototype.propfind = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PROPFIND', body, options)
		}
		CustomResource.prototype.proppatch = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PROPPATCH', body, options)
		}
		CustomResource.prototype.unlock = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'UNLOCK', body, options)
		}
		CustomResource.prototype.report = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'REPORT', body, options)
		}
		CustomResource.prototype.mkactivity = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'MKACTIVITY', body, options)
		}
		CustomResource.prototype.checkout = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'CHECKOUT', body, options)
		}
		CustomResource.prototype.merge = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'MERGE', body, options)
		}
		CustomResource.prototype.mSearch = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'M-SEARCH', body, options)
		}
		CustomResource.prototype.notify = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'NOTIFY', body, options)
		}
		CustomResource.prototype.subscribe = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'SUBSCRIBE', body, options)
		}
		CustomResource.prototype.unsubscribe = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'UNSUBSCRIBE', body, options)
		}
		CustomResource.prototype.patch = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'PATCH', body, options)
		}
		CustomResource.prototype.search = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'SEARCH', body, options)
		}
		CustomResource.prototype.connect = function(body, options)
		{
			return handleRequest(this._client, this._uri, 'CONNECT', body, options)
		}

		function Client(options)
		{
			this.options = extend({
					baseUri: 'https://www.pivotaltracker.com/services/{version}',
					baseUriParameters: { version: 'v5' }
				}, options)

			this.resources = new Resource0('', this)
		}

		Client.prototype.resource = function(route, parameters)
		{
			var path = '/' + template(route, parameters).replace(/^\//, '')

			return new CustomResource(path, this)
		}

		Client.prototype.request = popsicle
		Client.prototype.form = Client.form = popsicle.form
		Client.prototype.version = 'v5'

		return Client
	})
